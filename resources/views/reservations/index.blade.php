
<form action="{{ route('reservations.store') }}" method="POST" style="max-width: 350px; padding: 20px; display: flex; flex-direction: column; gap: 10px;">

    @csrf
    <h2>Maak een Reservering</h2>
    <label for="customer_name">Naam:</label>
    <input type="text" id="customer_name" name="customer_name" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required><br><br>

    <label for="phone">Telefoon:</label>
    <input type="text" id="phone" name="phone" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required><br><br>

    <label for="reservation_date">Reservering Datum:</label>
    <input type="date" id="reservation_date" name="reservation_date" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required><br><br>

    <label for="reservation_time">Reservering Tijd:</label>
    <input type="time" id="reservation_time" name="reservation_time" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required><br><br>

    <label for="number_of_people">Aantal Personen:</label>
    <input type="number" id="number_of_people" name="number_of_people" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required><br><br>

    <label for="note">Opmerking:</label>
    <textarea id="note" name="note" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></textarea><br><br>

    <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;">Verstuur Reservering</button>
</form>

<hr>

<h2>Reserveringen Overzicht</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Email</th>
            <th>Telefoon</th>
            <th>Reservering Datum</th>
            <th>Reservering Tijd</th>
            <th>Aantal Personen</th>
            <th>Opmerking</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $reservation)
        <tr>
            <td>{{ $reservation->id }}</td>
            <td>{{ $reservation->customer_name }}</td>
            <td>{{ $reservation->email }}</td>
            <td>{{ $reservation->phone }}</td>
            <td>{{ $reservation->reservation_date }}</td>
            <td>{{ $reservation->reservation_time }}</td>
            <td>{{ $reservation->number_of_people }}</td>
            <td>{{ $reservation->note }}</td>
            <td>{{ $reservation->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
