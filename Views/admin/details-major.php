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
                        <p class="right__desc"><?= $pageTitle ?></p>
                        <div class="right__formWrapper">
                            <form action="/ptit-project-php/index.php?controller=major&action=update" method="post">
                                <div class="right__inputWrapper">
                                    <label for="title">Mã ngành</label>
                                    <input type="text" name='id' placeholder="Mã ngành" value="<?= $major['id'] ?>" readonly>
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Tên ngành</label>
                                    <input type="text" name='name' placeholder="Tên ngành" value="<?= $major['name'] ?>">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Thuộc khoa</label>
                                    <select id="select" name="id_department">
                                        <?php foreach($departments as $d): ?>
                                            
                                            <?php if($major['id_department'] == $d['id']) { ?>
                                                <option value="<?= $d['id'] ?>" selected > <?= $d['name'] ?> </option>
                                            <?php } else { ?>
                                                <option value="<?= $d['id'] ?>" > <?= $d['name'] ?> </option>
                                            <?php }; ?>
                                            
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="description">Mô tả</label>
                                    <input name="description" value="<?= $major['description'] ?>" placeholder="Mô tả"></input>
                                </div>

                                <button class="btn" type="submit">Cập nhật</button>
                            </form>
                        </div>

                        <a href="/ptit-project-php/index.php?controller=major&action=show" class="right__tableMore">
                            Xem tất cả ngành<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>