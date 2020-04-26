$(function () {
    function addItem () {
      // tambah list
      $("#todo-items").append('<li><span> <input type="checkbox" id="chck">' + $("#todo").val() + '</span> <small><a href="#edit">Edit</a> &bull; <a href="#delete">Delete</a></small></li>');
      // clear text

      //cek box
      $("input:checkbox").click(function () {
        var $this = $(this);
        if (this.checked) {
            $this.parent().addClass('completed');
        } else {
            $this.parent().removeClass('completed');
        }
    });
      $("#todo").val("");
    }
    $("#todo").keydown(function (e) {
      // tekan enter
      if (e.which == 13)
        addItem();
    });
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#todo-items li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    // tombol tambah
    $("#add").click(addItem);
    
    // edit button
    $(document).on("click", 'a[href="#edit"]', function () {
      // membuat table edit
      $(this).closest("li").find("span").prop("contenteditable", true).focus();
      return false;
    });
    // tombol hapus
    $(document).on("click", 'a[href="#delete"]', function () {
      // menghapus list item
      $(this).closest("li").fadeOut(function () {
        $(this).remove();
      });
      return false;
    });
  });