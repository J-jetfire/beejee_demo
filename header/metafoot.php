<script type="text/javascript">
   function openEdit(id) {
      $.ajax({
         type: "POST",
         url: "cfg/get_task_edit.php",
         data: {
            id: id
         },
         success: function(data) {
            $("#form_edit").empty();
            $("#form_edit").html(data);
         }
      });
      $("#modal_edit").modal();
   };

   function clearFormAdd() {
      $("#modal_add").modal('hide');
      $('#form_add').find('input[type=text], input[type=email], textarea').val('');
   };

   $("#form_add").submit(function(e) {

      e.preventDefault();

      var form = $(this);
      var url = form.attr('action');

      $.ajax({
         type: "POST",
         url: url,
         data: form.serialize(),
         beforeSend: function() {
            $("#alert_done").html("Задача добавлена успешно!");
            document.getElementById("alert_done").style.opacity = 1;
         },
         success: function() {
            setTimeout(function() {
               location.reload();
            }, 1000);

         }
      });
   });

</script>
