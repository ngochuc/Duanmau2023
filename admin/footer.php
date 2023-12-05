</body>
</html>
<script src="../js/chuc.js"></script>
<script>
    $(document).ready(function(){
        
        var char = new Morris.Area({
        element: 'chart',

        xkey: 'date',
        ykeys: ['soluong','doanhthu'],

        labels: ['Số lượng đơn', 'Doanh thu']
        });
        $.ajax({
                url:"edit/thongke_model.php",
                method:"POST",
                dataType:"JSON",
                data:{time:"7"},
                success:function(data)
                {
                    char.setData(data);
                }
            })
        $('#timeThongKe').change(function(){
            var time = $(this).val();
            $.ajax({
                url:"edit/thongke_model.php",
                method:"POST",
                dataType:"JSON",
                data:{time:time},
                success:function(data)
                {
                    char.setData(data);
                }
            })
        })
        console.log(data)
    })

</script>