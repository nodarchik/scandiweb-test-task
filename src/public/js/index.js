const size = document.getElementById("size");
const height = document.getElementById("height");
const width = document.getElementById("width");
const length = document.getElementById("length");
const weight = document.getElementById("weight");

function getSelectedValue(){
    var productType = document.getElementById("productType").value;

    if (productType == "DVD"){
        size.style.display="grid";
        height.style.display="none";
        width.style.display="none";
        length.style.display="none";
        weight.style.display="none";
    }
    if (productType === "Furniture"){
        size.style.display="none";
        height.style.display="grid";
        width.style.display="grid";
        length.style.display="grid";
        weight.style.display="none";
    }
    if (productType == "Book"){
        size.style.display="none";
        height.style.display="none";
        width.style.display="none";
        length.style.display="none";
        weight.style.display="grid";
    }
}

