<style>
  body {
    height: 100vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  footer {
    width: 100%;
  }

  main {
    flex-grow: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    padding: 0;
  }

  main h1 {
    font-weight: 500;
    font-size: 28px;
    text-align: center;
    color: #4f4f4f;
    margin: 0 0 30px 0;
  }

  main h2 {
    font-weight: 500;
    font-size: 22px;
    color: #4f4f4f;
    margin: 0 0 50px 0;
  }

  main a {
    font-weight: 400;
    font-size: 18px;
    color: #fff;
    padding: 12px 30px;
    background-color: #252525;
    text-align: center;
    transition: background-color 0.3s ease;
  }

  main a:hover {
    background-color: #4f4f4f;
  }

  @media (max-width: 768px) {
    main h1 {
      margin-bottom: 20px;
    }

    main h2 {
      margin-bottom: 30px;
      text-align: center;
    }

    main {
      padding: 0 15px;
    }
  }

  @media (max-width: 576px) {
    main {
      margin: 130px 0 50px;
    }

    main h1 {
      font-size: 16px;
      margin-bottom: 15px;
    }

    main h2 {
      font-size: 14px;
    }
  }
</style>

<main>
  <h1>Поздравляем! <br> Ваш заказ успешно оформлен</h1>
  <h2>Наши менеджеры свяжутся с вами в ближайшее время</h2>
  <a href="/">Вернуться на главную</a>
</main>
