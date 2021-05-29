//event listener for browse store by name
function by_letter() {
    const browse_name = document.getElementById("letter-start");
    let selected_value = browse_name.value;
    location.href = "browse-store-1.php?letter-start=" + selected_value;
  };
  
  //event listener for browse store by category
  function by_category() {
    const browse_categ = document.getElementById("category");
    let select_value = browse_categ.value;
    location.href = "browse-store-2.php?category=" + select_value;
  };
  
  document.addEventListener("change", by_letter);
  document.addEventListener("change", by_category);