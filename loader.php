 <div class="loader">
    <img src="img/loading.gif" alt="loader" class="img-responsive" style="display: none; height: 80px; width: 80px; position: fixed; z-index: 100; background: white; border-radius: 50%; border: 1px solid powderblue;">
</div>
<script type="text/javascript">
	
 let wHeight = Math.ceil(($(window).height() - $('.loader img').innerHeight()) / 2);
 let wWidth = Math.ceil(($(window).width() - $('.loader img').innerWidth()) / 2);
 function anyFunction(){
    $.ajax({
        url: '',
        type: 'post',
        dataType: 'text',
        data: {type: "First"},
        beforeSend: (http) => {
            $('.loader img').fadeIn('fast').css({
                'top': wHeight + 'px',
                'left': wWidth + 'px'
            });
        },
        success: function(resultData) {
            $('.loader img').fadeOut(1000);
            console.log(resultData);
        }
    }); 
}
</script>

<!-- sweetalert End -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">

    function sweetAlertSuccess(msg){
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: msg,
            showConfirmButton: false,
            timer: 1500
        })
    }       

    function sweetAlertError(msg){
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: msg,
            showConfirmButton: false,
            timer: 1500
        })
    }
    if (data.status == "success") {
        sweetAlertSuccess(data.msg);
    }

    Swal.fire('Please Wait. Data Loading.');
    Swal.showLoading();
    swal.close();

</script>
<?php 
if ($sql) {
    $arr = array('status' => 'success', 'msg' => 'Mail Send Successfully.');
} else {
    $arr = array('status' => 'error', 'msg' => 'Mail Not Added.');
}
echo json_encode($arr);
?>

<!-- sweetalert Start -->

