function regformhash(form, curyear, section) {
     // Check each field has a value
    if (curyear.value == ''        || 
          section.value == ''){
        alert('You must provide all the requested details. Please try again');
        return false;
    }
}