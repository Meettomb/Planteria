function displayImage1() {
    var input = document.getElementById('imageInput1');
    var image = document.getElementById('selectedImage1');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            image.src = e.target.result;
            image.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
    }
}