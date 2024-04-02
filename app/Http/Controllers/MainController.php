<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use App\Models\book_meal;
use App\Models\User;
use App\Models\categories;
use App\Models\sub_category;
use App\Models\SubCategory;
use App\Models\foods;
use Auth;
use Hash;
use App\Http\Traits\Image;

class MainController extends Controller
{
    use Image;
    public function book_meal(Request $res)
    {
        $data['name']=$res->username;
        $data['email']=$res->email;
        $data['mobile']=$res->number;
        $data['landmark']=$res->landmark;
        $data['dish_name']=$res->dish;
        $data['quantity']=$res->quantity;
        $data['address']=$res->address;
         
        $ins =book_meal::insert($data);

        if($ins)
        {
            return redirect('homepage');
        }
        else
        {
            echo "error occured";
        }
    }


    public function signin(Request $res)
    {
        $data['name']=$res->name;
        $data['email']=$res->email;
        $data['password']=Hash::make($res->password);
        if($res->hasFile('image'))
        {
            $data['image'] = $this->imageUpload($res->file('image'), 'img');
            
        }  

        $ins = User::insert($data);
        if($ins)
        {
            return redirect('homepage')->with('succes','Thank you for registration');
        }
        else
        {
            echo "sorry for the inconvenience";
        }
    }

    public function signin_sub(Request $res)
    {
        $data['name']=$res->name;
        $data['email']=$res->email;
        $data['password']=Hash::make($res->password);
        $data['type']=2;
        if($res->hasFile('image'))
        {
            $data['image'] = $this->imageUpload($res->file('image'), 'img');
            
        }  

        $ins = User::insert($data);
        if($ins)
        {
            return redirect('homepage')->with('succes','Thank you for registration');
        }
        else
        {
            echo "sorry for the inconvenience";
        }
    }

    public function login(Request $res)
    {
        $data['email']=$res->email;
        $data['password']=$res->password;
        if(Auth::attempt($data))
        {
            $user = Auth::user();
            if ($user->type == 1) 
            {
                return redirect('admin_main');
            } 
            else 
            {
                return redirect('homepage')->with('success', 'You are logged in now');
            }
        }
        else
        {
            return redirect('homepage')->with('error', 'Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('homepage');
    }

    public function order_history($email)
    {
        $data = book_meal::where('email', $email)->get();
        return view('orderhistory', ['data' => $data]);
    }

    public function view_user()
    {
        $data = User::all();
        return view('Admin.view_user', ['data' => $data]);
    }

    public function add_category(Request $res)
    {
        $data['name']=$res->name;
        if($res->hasFile('image'))
        {
            $data['images'] = $this->imageUpload($res->file('image'), 'img');
            
        }
        $ins = categories::insert($data);   
        if($ins)
        {
            return redirect('add_category')->with('success','Category Added Successfully');
        }
        else
        {
            return redirect('add_category')->with('error','Sorry , Please try again');
        }
    }

    public function show_category()
    {
        $data = categories::all();
        return view('Admin.add_category', ['data' => $data]);
    }

    public function get_category()
    {
        $data= categories::all();
        return view('Admin.add_sub_category',['data'=>$data]);
    }

    public function add_sub_category(Request $res)
    {
        $data['category_id']=$res->category;
        $data['name']=$res->name;
        
        if($res->hasFile('image'))
        {
            $data['image'] = $this->imageUpload($res->file('image'), 'img');
            
        }

        $ins = SubCategory::insert($data);
        if($ins)
        {
            return redirect ('add_sub_category')->with('success','Food Sub Category Added Successfully!!!');
        }
        else
        {
            return redirect ('add_sub_category')->with('error','Error Occured');
        }
    }

    public function getsubcat(){
        $data = categories::all();
        foreach($data as $da)
            $da->subcat = SubCategory::where('category_id',$da->id)->get();
        return view('Admin.add_food',['data'=>$data]);
    }

    
    public function getit($id)
    {
        $subcats = SubCategory::where('category_id', $id)->get();
        $options = [];
    
        if ($subcats->isNotEmpty()) {
            foreach ($subcats as $subcat) {
                $options[] = [
                    'id' => $subcat->id,
                    'name' => $subcat->name
                ];
            }
        } else {
            $options[] = [
                'id' => '',
                'name' => 'No Subcategory found'
            ];
        }
        return response()->json($options);
    }

    public function add_food(Request $res)
    {
        $data['category_id']=$res->category;
        $data['subcat_id']=$res->subc;
        $data['cost_type']=$res->costing_type;
        $data['name']=$res->name;
        $data['price']=$res->price;
        $data['discount_price']=$res->discount_price;
        $ins = foods::insert($data);
        if($ins)
        {
            return redirect('add_food')->with('success','Food item added');
        }
        else
        {
            return redirect('add_food')->with('error','error occured');
        }
    }

    public function fetcher()
    {
        $data = categories::all();
        return view('content',['data'=>$data]);

    }

    public function get_food(Request $res)
    {
        $id = $res->category;
        $data = sub_category::where('category_id', $id)->get()->toArray();

        $list = [];
        foreach ($data as $category) {
            $category['foods'] = foods::where('subcat_id', $category['id'])->get()->toArray();

            $list[] = $category;
        }

        return view('getfood', ['data' => $list]);
    }


    public function view_cart()
    {
        
    }
    public function view_orders()
    {

    }
      
}
