$(".automatic-back").click(function () {
    $(".automatic").hide();
    $(".form-homePage").show();
});

$(".btn-back-top").click(function () {
    $(".automatic").hide();
    $(".comparison_results").hide();
    $(".form-homePage").show();
});

function fileValidation() {
    var fileInput = document.getElementById('file-select');
    var filePath = fileInput.value;
    var file_page = fileInput.files[0];
    console.log(file_page.name);
    $(".preview-file").html(file_page.name);

    var allowedExtensions = /(\.pdf)$/i;
    if (!allowedExtensions.exec(filePath)) {
        $(".form-message").html('ファイルの形式が正しくありません。');
        fileInput.value = '';
        $(".preview-file").html('');
        return false;
    }
    else{
        $(".form-message").html(' ');
    }
}

function validate() {
    var fileInput =
        document.getElementById('file-select');
    if (fileInput.files.length === 0) {
        $(".form-message").html('PDFファイルを選択してください。');
        return false;
    }
}
