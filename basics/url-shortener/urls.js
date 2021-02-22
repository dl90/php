$(() => {

  $(".urls").on('click', function () {
    $("#copy").val($(this).children("i").text());
    $("#copy").focus();
    $("#copy").select();

    // console.log($("#copy").val());
    document.execCommand("copy");
    alert("Link copied.")
  });

})