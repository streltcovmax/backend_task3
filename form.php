    <form action="" method="post">

      <label>
          Ваше фио:<br>
          <input name="name" placeholder="Фамилия Имя Отчество" class="field">
      </label>
      <label>
          Ваш телефон:<br>
          <input name="number" type="tel" placeholder="+79123123123" class="field">
      </label>
      
      <label>
          Ваш email:<br>
          <input name="email" type="email" placeholder="user@gmail.com" class="field">
      </label>
      
      <label>
          Дата рождения:<br>
          <input name="data" type="date" value="2077-09-22" class="field">
      </label>
      
      Пол:
      <br>
          <label>
              <input type="radio" name="radio" value="Значение1">
              Мужской
          </label>
          
          <label>
              <input type="radio" name="radio" value="Значение2">
              Женский
          </label>
      <label>
          Любимый язык программирования:
          <br>
          <select name="lang[]" multiple="multiple">
              <option value="Значение1">Pascal </option>
              <option value="Значение2">C </option>
              <option value="Значение3">C++ </option>
              <option value="Значение4">JavaScript </option>
              <option value="Значение5">PHP </option>
              <option value="Значение6">Python </option>
              <option value="Значение4">Java </option>
              <option value="Значение5">Haskel </option>
              <option value="Значение6">Clojure </option>
              <option value="Значение5">Prolog </option>
              <option value="Значение6">Scala </option>
          </select>
      </label>
      
      <label>
          Биография:<br>
          <textarea name="biography">...</textarea>
      </label>
      
      <label>
          <input type="checkbox" name="biography">
          с контрактом ознакомлен (а) 
      </label>
      
      <input type="submit" value="Отправить">
    </form>
  </body>
</html>
