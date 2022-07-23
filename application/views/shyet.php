<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dateTimePicker.css');?>">
    <script type="text/javascript" src="<?php echo base_url('scripts/components/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('scripts/dateTimePicker.min.js');?>"></script>
    </head>
  <body>
  <?=form_open_multipart('http://localhost/bookersafrica/server/adapter.php');?>
      <input type='hidden' name='bookid' value='3'>
            <div class="container">
      <h2>Availability Calendar</h2>
      <div class="row">
        <div class="col-xss-4">
          <div id="dynamic-data" data-toggle="calendar"></div>
        </div> </div>
        <input type=submit value='CHECK AVAILABILTY' />
  <script type="text/javascript" src="<?php echo base_url('scripts/components/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('scripts/dateTimePicker.min.js');?>"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
      $('#basic').calendar();
      $('#glob-data').calendar(
      {
        unavailable: ['*-*-8', '*-*-10']
      });
      $('#custom-first-day').calendar(
      {
        day_first: 2,
        unavailable: ['2014-07-10'],
        onSelectDate: function(date, month, year)
        {
          alert([year, month, date].join('-') + ' is: ' + this.isAvailable(date, month, year));
        }
      });
      $('#custom-name').calendar(
      {
        day_name: ['CN', 'Hai', 'Ba', 'Tư', 'Năm', 'Sáu', 'Bảy'],
        month_name: ['Tháng Một', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu', 'Tháng Bảy', 'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Tháng Mười Một', 'Tháng Mười Hai'],
        unavailable: ['2014-07-10']
      });
      $('#dynamic-data').calendar(
      {
        // $key: [7]
        adapter: 'http://localhost/bookersafrica/server/adapter.php'
        
      });
//       $(document).ready(function()
// {
      $('#basic').calendar({
  adapter: "<?php echo base_url('server/adapter.php');?>"
  }); 
// }
      $('#show-next-month').calendar(
      {
        num_next_month: 1,
        num_prev_month: 1,
        unavailable: ['*-*-9', '*-*-10']
      });
    });
    </script>
  </body>
</html>