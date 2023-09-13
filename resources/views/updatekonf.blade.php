<!DOCTYPE html>
<html>
<head>
    <title>Изменить конференцию</title>
    <style>
        /* Your existing CSS styles (from the previous example) go here */

        /* Additional styles specific to the update form */
        body {
            font-family: Trebuchet MS, sans-serif;
            line-height: 1.6;
            margin: 40px;
            padding: 0;
            background: linear-gradient(-45deg, #24aaaf, #00aeef, #24aaaf, #fdaf7b);
            background-size: 900% 900%;
            animation: gradient 30s ease infinite;
            
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

        /* Apply the existing styles from the previous example */
        /* ... */
    </style>
</head>
<body class="antialiased bg-ex-fixed">
    <div class="update-form">
        <h2>Обновить конференцию</h2>
        <form method="POST" action="{{ route('upkon', ['id' => $konfs->id]) }}">
            @csrf
            <label for="name">Имя:</label>
            <input type="text" name="name" required value="{{ $konfs->name }}"><br>

            <label for="country">Страна:</label>
            <input type="text" name="country" required value="{{ $konfs->country }}"><br>

            <label for="city">Город:</label>
            <input type="text" name="city" required value="{{ $konfs->city }}"><br>

            <label for="date_start">Дата начала:</label>
            <input type="date" name="date_start" required value="{{ $konfs->date_start }}"> <br>

            <label for="date_end">Дата конца:</label>
            <input type="date" name="date_end" required value="{{ $konfs->date_end }}"><br>

            <label for="deadline">Дедлайн:</label>
            <input type="data" name="deadline" required value="{{ $konfs->deadline }}"><br>

            <label for="description">Описание:</label>
            <textarea name="description" required>{{ $konfs->description }}</textarea><br>

            <button type="submit">Изменить</button>
        </form>
    </div>
</body>
</html>
