const items = JSON.parse(localStorage.getItem('items')) || [];
function add_item(button) {
    let foodId = button.closest('.card').querySelector('.food-id');
    if (foodId) 
    {
        items.push(foodId.value);
        console.log(items);
        localStorage.setItem('items', JSON.stringify(items));
    } 
    else {
        console.error("Food ID not found");
    }
}
