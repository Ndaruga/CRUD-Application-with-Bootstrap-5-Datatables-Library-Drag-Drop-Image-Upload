$(document).ready(function() {
    // Display image before upload
    $("input.image").change(function(){
        var file = this.files[0];
        var url = URL.createObjectURL(file);
        $(this).closest(".row").find(".preview_img").attr("src", url);
    });

    // Display pjone number codes
    var input = document.querySelector("#phone");

    window.intlTelInput(input, {
        // show dial codes too
        separateDialCode: true,
        
        // If there are some countries you want to show on the top.
        preferredCountries: ["ke", "ug"],
        //Default country
        initialCountry:"ke",
        // show only these countres, remove all other
        // onlyCountries: ["ru", "cn","pk", "sg", "my", "bd"],

        // If there are some countries you want to execlde.
        // excludeCountries: ["in","il"]
    });


});