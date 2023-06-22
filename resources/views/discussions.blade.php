<!DOCTYPE html>
<html>
<head>
    <title>Daftar Diskusi</title>
</head>
<body>
    <h1>Daftar Diskusi</h1>

    <form action="{{ route('discussions.store') }}" method="POST">
        @csrf
        <label for="judul">Judul:</label>
        <input type="text" name="judul" required><br><br>
        <label for="isi">Isi:</label>
        <textarea name="isi" required></textarea><br><br>
        <button type="submit">Kirim Diskusi</button>
    </form>

    <h2>Riwayat Diskusi</h2>

    <ul>
        @foreach ($discussions as $discussion)
            <li>
                <h3>{{ $discussion->judul }}</h3>
                <p>{{ $discussion->isi }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>