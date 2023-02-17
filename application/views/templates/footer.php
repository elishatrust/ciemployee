
   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>
      $(document).ready( function () {
      $('#dataTable1').DataTable();
      } );
    </script>


    <script>
      $(document).ready(function(){
        
        $('.confirm_del').click(function(e){
          e.preventDefault();

          confirmDialog = confirm('Are you sure, you want to delete this record?');
          if(confirmDialog){
            var id = $(this).val();
            //alert(id);
            $.ajax({
              type:"DELETE",
              url:"/employee/confirmDelete/"+id,
              success:function(response){
                alert('Record deleted successfully');
                window.location.reload();
              }
            })
          }
        });
      });
    </script>
  </body>
</html>