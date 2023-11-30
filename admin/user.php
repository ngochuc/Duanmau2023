    <div>
        <div class="subject_admin">
            <h1>Danh sách người dùng</h1>
        </div>
        <table class="table_pro_admin">
            <th>
                <td>ID người dùng</td>
                <td>Tên người dùng</td>
                <!-- <td>Pass</td> -->
                <td>Email</td>
                <td>Address</td>
                <td>Số điện thoại</td>
                <td>Role</td>
                <td>Name</td>
            </th>
            <?php foreach($listuser as $user): extract($user); if($code_verify == 0):?>
            <tr>
                <td><?php if($role != 1): ?>
                    <a class="btn_dele-admin xoauser" data-id="<?php echo $id ?>">delete</a>
                    <?php endif ?>
                </td>
                <td><?php echo $id ?></td>
                <td><?php echo $user ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $address ?></td>
                <td><?php echo $tel ?></td>
                <td><?php echo $role ?></td>
                <td><?php echo $name ?></td>
            </tr>
            <?php endif; endforeach ?>
        </table>
    </div>
</div>
</body>