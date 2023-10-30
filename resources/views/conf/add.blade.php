<!DOCTYPE html>
<html>
<head>
    <title>Изменить конференцию</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&display=swap">
    <style>
        html {
            font-family: Fira Sans,sans-serif;
        }

        body {
            line-height: 1.6;
            margin: 40px;
            padding: 0;
            background-color: #f8ebe5;
            
        }

        .update-form {
            max-width: 40%;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .update-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .update-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .update-form input[type="text"],
        .update-form input[type="date"],
        .update-form textarea {
            width: 100%;
            max-width: 300px; /* Adjust the max-width as needed */
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }

        .update-form textarea {
            resize: vertical;
        }

        .update-form button {
            display: block;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background-color: #00aeef;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }

        .update-form button:hover {
            background-color: #23a6ab;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }


    </style>
</head>
<body class="antialiased bg-ex-fixed">
    <div class="update-form">
        <h2>Добавить мероприятие</h2>
        <form method="POST" action="{{ route('conf.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Название:</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label for="country">Страна:</label>
                <input type="text" name="country" required>
            </div>

            <div class="form-group">
                <label for="city">Город:</label>
                <input type="text" name="city" required>
            </div>

            <div class="form-group">
                <label for="date_start">Дата начала:</label>
                <input type="date" name="date_start" required>
            </div>

            <div class="form-group">
                <label for="date_end">Дата конца:</label>
                <input type="date" name="date_end" required>
            </div>

            <div class="form-group">
                <label for="deadline">Дедлайн:</label>
                <input type="date" name="deadline" required>
            </div>

            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea name="description" required></textarea>
            </div>

            <button type="submit" class="btn-primary">Добавить</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>
