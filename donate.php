<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'template/header.php';?>
  </head>
  <body>
    <div class="primary-container info-page-container">
      <?php include 'template/head-logo.php';?>
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
  </body>
</html>
