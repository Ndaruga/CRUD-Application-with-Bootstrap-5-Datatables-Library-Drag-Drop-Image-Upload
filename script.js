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

    // Insert data into database
    $("#insertForm").on("submit", function(e) {
        $("#inputBtn").attr("disabled", "disabled");
        e.preventDefault();
        $.ajax({
            url: "server.php?action=insertData",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            sucess: function(response) {
                var response = JSON.parse(response);
                if (response.statusCode == 200) {
                    $("#offcanvasAddUser").offcanvas("hide");
                    $("insertBtn").removeAttr("disabled");
                    $("insertForm")[0].reset();
                    $(".preview_img").attr("src", "images.default_profile.jpg");
                    $("#successToast").toast("show");
                    $("#successMsg").html(response.message);

                } else if ( response.statusCode == 500) {
                    $("#offcanvasAddUser").offcanvas("hide");
                    $("insertBtn").removeAttr("disabled");
                    $("insertForm")[0].reset();
                    $(".preview_img").attr("src", "images.default_profile.jpg");
                    $("#errorToast").toast("show");
                    $("#errorMsg").html(response.message);

                } else if (response.statusCode == 400) {
                    $("insertBtn").removeAttr("disabled");
                    $("#errorToast").toast("show");
                    $("#errorMsg").html(response.message);
                }

            }
        })
    })
});