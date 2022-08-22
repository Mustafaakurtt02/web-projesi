<!DOCTYPE html>
<html>
  <head>
    <style>
      #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #customers td,
      #customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #customers tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      #customers tr:hover {
        background-color: #ddd;
      }

      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04aa6d;
        color: white;
      }
    </style>
  </head>
  <body>
    <h1>A Fancy Table</h1>

    <table id="customers">
      <tr>
        <th>Ad soyad</th>
        <th>telefon</th>
        <th>email</th>
        <th>konu</th>
        <th>mesaj</th>
      </tr>
      <tr>
        <td>ali</td>
        <td>5415553</td>
        <td>ali@ali</td>
        <td>test</td>
        <td>hayırllı olsun</td>
      </tr>
    </table>
  </body>
</html>
