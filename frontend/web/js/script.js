var model = $("#model");
var make = $("#make");
var price = $("#price")

$("#btn-car").on("click", function(e){
    e.preventDefault();
    console.log(model.val(), make.val())
})