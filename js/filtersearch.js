var priceRange = document.getElementById("price-range");
var minPrice = document.getElementById("min-price");
var maxPrice = document.getElementById("max-price");

// Set default values
minPrice.innerHTML = "$0";
maxPrice.innerHTML = "$100";

// Update values when range changes
priceRange.oninput = function() {
  var min = priceRange.min;
  var max = priceRange.max;
  var value = priceRange.value;

  var minPriceValue = Math.floor(value / 10) * 10;
  var maxPriceValue = Math.ceil(value / 10) * 10;

  if (minPriceValue == 0) {
    minPrice.innerHTML = "GHS0";
  } else {
    minPrice.innerHTML = "GHS" + minPriceValue;
  }

  if (maxPriceValue == 1000) {
    maxPrice.innerHTML = "GHS100+";
  } else {
    maxPrice.innerHTML = "$" + maxPriceValue;
  }
};
