<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="Views/admin/css/main.css">

    
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="dashboard">
            <?php include "Views/admin/sidebar.php"; ?>

                <div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc" style="float: left; display: block;"><?= $pageTitle ?></p>

                        <input type="text" class="timkiem" placeholder="Tìm kiếm theo tên" style="float: right; 
                        border: 1px solid grey; border-radius: 5px; height: 21px; 
                        padding: 2px 23px 2px 30px;
                        margin-bottom: 20px;
                        font-size: 17px; font-family: "Muli", sans-serif;">

                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Mã sinh viên</th>
                                            <th>Họ tên</th>
                                            <th>Ngày sinh</th>
                                            <th>Địa chỉ</th>
                                            <th>Email</th>
                                            <th>Thuộc ngành</th>

                                            <th>Chi tiết</th>
                                            <th>Sửa</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>

                                    <tbody class="danhsach">
                                        <?php foreach($students as $s): ?>
                                        
                                        <tr>
                                            <td data-label="Mã sinh viên"><?= $s['code'] ?></td>
                                            <td data-label="Họ tên"><?= $s['name'] ?></td>

                                            <?php $date = date_create($s['birthday']); ?>
                                            <td data-label="Ngày sinh"><?= date_format($date,"d/m/Y") ?></td>
                                            
                                            <td data-label="Địa chỉ"><?= $s['address'] ?></td>
                                            <td data-label="Email"><?= $s['email'] ?></td>
                                            <td data-label="Thuộc ngành"><?= $s['name_major'] ?></td>

                                            <td data-label="Chi tiết" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=student&action=details&id=<?= $s['id'] ?>"><img src="Views/admin/assets/icon-book.svg" alt=""></a>
                                            </td>
                                            <td data-label="Sửa" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=student&action=details&id=<?= $s['id'] ?>"><img src="Views/admin/assets/icon-edit.svg" alt=""></a>
                                            </td>
                                            <td data-label="Xoá" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=student&action=delete&id=<?= $s['id'] ?>"><img src="Views/admin/assets/icon-trash-black.svg" alt=""></a>
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>

                                    </tbody>

                                </table>

                                <a href="/ptit-project-php/index.php?controller=student&action=add" class="right__tableMore" style="width: 532px; padding-top: 15px;">
                                    Thêm sinh viên <img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                                
                                <a href="/ptit-project-php/index.php?controller=student&action=haveBirthday" class="right__tableMore" style="width: 550px; padding-top: 15px;">
                                    Sinh nhật hôm nay<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                            
                                <a href="/ptit-project-php/index.php?controller=student&action=export" class="right__tableMore" style="width: 550px; padding-top: 15px;">
                                    Xuất file danh sách<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
    
    <script src="//code.jquery.com/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('.timkiem').keyup(function(){
                var txt = $('.timkiem').val();
                $.post('/ptit-project-php/index.php?controller=student&action=search',
                     {data: txt}, function(data){
                    $('.danhsach').html(data);
                })
            })
        })
    </script>
</body>

</html>