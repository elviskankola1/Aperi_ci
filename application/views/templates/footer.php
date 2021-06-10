
<script src="<?= base_url()?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?= base_url()?>assets/js/popper.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/js/main.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var i=0;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<div id="row'+i+'"><div class="row"><div class="col-8 ml-2"><input type="email" name="studentmail[]" placeholder="Participat Email '+parseInt(i+1)+'" class="form-control" id="name_list" required></div><div class="col-1"><button type="button" name="remove" class="btn text-center pl-3 btn-danger btn_remove" id="'+i+'">Remove</button></div></div>'); 
        });
        $(document).on('click', '.btn_remove', function(){
            var button_id= $(this).attr("id");
            $('#row'+button_id+'').remove();
            console.log(i--);
            //$('#nbemail').val(i+1);
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#search_cyty').on('keyup', function(){
            console.log((this).val);
        })
    });
</script>
</body>

</html>