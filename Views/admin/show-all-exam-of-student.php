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
                        
                        <p class="right__desc" style="float: left; display: block;"><?= $pageTitle ?> : <?= $student['name'] ?></p>

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
                                            <th>Mã</th>
                                            <th>Môn học</th>
                                            <th>Điểm thi</th>
                                            
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($exams as $e): ?>
                                        
                                        <tr>
                                            <td data-label="Mã"><?= $e['id'] ?></td>
                                            <td data-label="Môn học"><?= $e['name_subject'] ?></td>
                                            <td data-label="Điểm thi"><?= $e['result'] ?></td>

                                            <td data-label="Sửa" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=exam&action=details&id=<?= $e['id'] ?>"><img src="Views/admin/assets/icon-edit.svg" alt=""></a>
                                            </td>
                                            <td data-label="Xoá" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=exam&action=delete&id=<?= $e['id'] ?>"><img src="Views/admin/assets/icon-trash-black.svg" alt=""></a>
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                                <a href="/ptit-project-php/index.php?controller=exam&action=show" class="right__tableMore">
                                    Quay lại thống kê<img src="Views/admin/assets/icon-return.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>