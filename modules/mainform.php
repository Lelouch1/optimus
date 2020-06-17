<div class="mainform">
  <div class="container">
    <form action="#" method="post">
      <h3>Бесплатная консультация врача</h3>
      <div class="form-group">
        <div class="row">
          <div class="col">
            <label for="surname">Фамилия</label>
            <input type="text" name="surname" class="form-control" id="surname" required> </div>
          <div class="col">
            <label for="phone">Телефон</label>
            <input type="text" name="phone" class="form-control tel" id="phone" required> </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col">
            <label for="timepicker">Время для звонка</label>
            <select class="form-control" id="time" required>
              <option value="09:00">09:00</option>
              <option value="10:00">10:00</option>
              <option value="11:00">11:00</option>
              <option value="12:00">12:00</option>
              <option value="13:00">13:00</option>
              <option value="14:00">14:00</option>
              <option value="15:00">15:00</option>
              <option value="16:00">16:00</option>
              <option value="17:00">17:00</option>
              <option value="18:00">18:00</option>
              <option value="19:00">19:00</option>
              <option value="20:00">20:00</option>
              <option value="21:00">21:00</option>
            </select>
          </div>
          <div class="col">
            <label for="doctor">Врач</label>
            <select class="form-control" id="doctor" required>
              <option value="Бахтина Зоя Энверовна">Бахтина Зоя Энверовна</option>
              <option value="Джериева Ирина Владимировна">Джериева Ирина Владимировна</option>
              <option value="Антонов Андрей Борисович">Антонов АндрейБорисович</option>
              <option value="Бескровная Оксана Владиславовна">Бескровная Оксана Владиславовна</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <input type="submit" class="btn" value="Записаться на приём"> </div>
    </form>
  </div>
</div>