<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User List</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px 20px;
            font-family: Arial, sans-serif;
            background-color: #fdf2f6;
            color: #111;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            margin: auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #f3c4d4;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h2 {
            margin: 0;
            color: #111111;
            font-size: 28px;
        }

        .header p {
            margin-top: 8px;
            color: #666666;
            font-size: 14px;
        }

        .title-line {
            width: 50px;
            height: 4px;
            background-color: #e91e63;
            margin-top: 12px;
            border-radius: 5px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #111111;
            color: #ffffff;
            padding: 13px;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #eeeeee;
            font-size: 14px;
        }

        tbody tr:hover {
            background-color: #fff0f5;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .id {
            font-weight: bold;
            color: #e91e63;
        }

        .username {
            font-weight: bold;
        }

        .no-users {
            text-align: center;
            padding: 25px;
            color: #777777;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px 10px;
            }

            .container {
                padding: 20px;
            }

            .header h2 {
                font-size: 23px;
            }

            th,
            td {
                padding: 10px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">
            <h2>User Management</h2>
            <p>List of registered users</p>

            <div class="title-line"></div>
        </div>

        <div class="table-wrapper">

            <table>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Username</th>
                    </tr>
                </thead>

                <tbody>

                    <?php if (!empty($users)): ?>

                        <?php foreach ($users as $user): ?>

                            <tr>

                                <td class="id">
                                    <?= htmlspecialchars($user['id']); ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($user['firstname']); ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($user['lastname']); ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($user['email']); ?>
                                </td>

                                <td class="username">
                                    <?= htmlspecialchars($user['username']); ?>
                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="5" class="no-users">
                                No users found.
                            </td>
                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>