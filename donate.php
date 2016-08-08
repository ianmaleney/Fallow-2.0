<!DOCTYPE html>
<html lang="en">
  <?php include 'template/header.php';?>
  <body>
    <div class="primary-container info-page-container">
      <a href="/index.php" alt="Fallow Media" class="logo header-logo">
        <svg id="fallow-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 712.8 712.8">
          <title>Logo/Home Button</title>
          <path d="M709.9 356.4L356.35 709.93 2.8 356.4 356.35 2.83zm-707.3-.2h707m-353 354V3.2m156 510h-313m311 0v-313m2 1h-313m2 0v312m193.7-117.9l117.1-.4m-78.2 39.3l78.2-.3m-39.3 39.2h39.3M396 317.4l-.3-117.1m39.2 78.2l-.3-78.2m39.2 39.3l.1-39.3M317.4 317.4l-117.1.3m78.2-39.2l-78.2.2m39.4-39.1l-39.4-.1m117.8 155.7l.4 117.1m-39.3-78.2l.3 78.2M240.3 473l-.1 39.3" class="a"/>
        </svg>
      </a>
      <section class="info-section">
        <h1> Support Us </h1>
        <p>Fallow Media is free. You can read everything online without getting a subscription. Still, we think it's very important to pay our contributors. We rely on readers to make sure that happens.</p>
        <p>There are two ways you can help us continue our work: You can donate, or subscribe.</p>
        <p>Donation is a simple, one-off way to send us some money &mdash; no amount is too little. Subscription is a monthly payment of just €3. Any money we recieve is used to pay contributors and to cover our minimal hosting costs.</p>
        <p>We use Paypal to handle donations and subscription payments. If you have any trouble, email us and we'll sort you out.</p>
        <div id="subform">
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="CV8LJD9MNAAMN">
            <input type="submit" class="primary-button payment-button" name="submit" value="Subscribe" alt="Subscribe to Fallow Media with Paypal">
          </form>

          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="UCZQBKUJZ2NTN">
            <input type="submit" class="primary-button payment-button" name="submit" value="Donate" alt="Donate to Fallow Media with Paypal">
          </form>
        </div>
      </section>
    <!-- Search Splash-->
    <?php include 'template/searchbar.php';?>
    <!-- Footer -->
    <?php include 'template/footer.php';?>
    <script src="assets/js/index.js"></script>
  </body>
</html>
