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
              <input type="radio" name="radio" value="m">
              Мужской
          </label>

          <label>
              <input type="radio" name="radio" value="f">
              Женский
          </label>
          <div >

          <label class="input">
            Любимый язык программирования<br />
            <select  id="lang" class="my-2" name="lang[]" multiple="multiple">
              <option value="Pascal">Pascal</option>
              <option value="C">C</option>
              <option value="C++">C++</option>
              <option value="JavaScript">JavaScript</option>
              <option value="PHP">PHP</option>
              <option value="Python">Python</option>
              <option value="Java">Java</option>
              <option value="Haskel">Haskel</option>
              <option value="Clojure">Clojure</option>
              <option value="Scala">Scala</option>
            </select>
          </label>
          </div>

      <label>
          Биография:<br>
          <textarea name="biography">...</textarea>
      </label>

      <div>
          <label for="oznakomlen">
            <input type="checkbox" name="check_mark" id="oznakomlen"/>
            с контрактом ознакомлен(а)
          </label>
        </div>

      <input type="submit" value="Отправить">
    </form>
  </body>
</html>
