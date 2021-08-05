// Adding Classes
$(
    "#shipping_address_country select, #shipping_address_region select, #billing_address_country select, #billing_address_region select"
  ).addClass("col-sm-12 form-control");
  $("form label").addClass("control-label");
  $("textarea,#contactpage #contactpage_message").addClass("field");
  $(
    "#estimate_shipping_button, #set_shipping_button, #set_coupon_code_button"
  ).addClass("btn secondary btn-block");
  $(".actions .button").addClass("btn primary");
  $(".checkbox-field").addClass("checkbox");
  $(
    "#contacts .textarea, #shipping_address .textarea, #other .textarea, #billing_address .textarea, #contacts .select, #shipping_address .select, #other .select, #billing_address .select, #customer_password, #customer_password_confirmation, .text-field input, #contact_email, #contact_name, #contact_message, #contact_phone, #coupon_code, #customer_email, #customer_phone, #customer_shipping_address_name, #customer_shipping_address_surname, #customer_shipping_address_address, #customer_shipping_address_taxid, #customer_shipping_address_postal, #customer_shipping_address_city, #customer_billing_address_name, #customer_billing_address_surname, #customer_billing_address_address, #customer_billing_address_taxid, #customer_billing_address_postal, #customer_billing_address_city,#estimate_shipping_form select,#estimate_shipping_form input"
  ).addClass("form-control");
  
  $(
    "#shipping_address div.col-sm-12 input,#shipping_address div.col-sm-12 select,#billing_address div.col-sm-12 input,#billing_address div.col-sm-12 select,#billing_address div.col-sm-12 textarea,#customer_additional_fields input,#customer_additional_fields select,#customer_additional_fields textarea"
  ).addClass("form-control");
  
  $(".error").addClass("mt-2");
  $(".success").addClass("mt-2");
  
  // Pagination
  $(".pager").addClass("pagination justify-content-center");
  $(".pagination li").addClass("page-item");
  $(".pagination li a").addClass("page-link");
  $(".pagination").removeClass("pager");
  $(".pagination").wrapAll("<nav>");
  
  // Contact Page
  $("#contactpage").addClass("row");
  $("#contactpage h2").wrapAll('<div class="col-12">');
  $("#contactpage_email,#contactpage_name,#contactpage_phone").addClass(
    "col-md-4"
  );
  $(
    "#contactpage_message, #contactpage .actions, #contactpage p.required, #contactpage #contactpage_message"
  ).addClass("col-12");
  $("#contactpage .actions .button").addClass("btn primary btn-block");
  $("#contactpage .badge.error")
    .parent()
    .addClass("error-field");
  
  // Cart
  $("#coupon_code").wrapAll('<div class="form-group">');
  $(
    "#estimate_shipping_form > label:nth-child(1), #estimate_shipping_country"
  ).wrapAll('<div class="form-group">');
  $(
    "#estimate_shipping_form > label:nth-child(2), #estimate_shipping_region"
  ).wrapAll('<div class="form-group">');
  $(
    "#estimate_shipping_form > label:nth-child(3), #estimate_shipping_municipality"
  ).wrapAll('<div class="form-group">');
  $(
    "#estimate_shipping_form > label:nth-child(4), #estimate_shipping_postal"
  ).wrapAll('<div class="form-group">');
  $("#estimate_shipping #shipping_address_municipality").addClass("form-group");
  
  // Checkout
  $("#checkout h2.legend").addClass("block-header");
  $("#checkout h2.legend").removeClass("legend");
  $("#contacts > div").wrapAll('<div class="row">');
  $("#shipping_address > div").wrapAll('<div class="row">');
  $("#billing_address > div").wrapAll('<div class="row">');
  $("#checkout #other > div").wrapAll('<div class="row">');
  $(
    "#contacts .row > div, #shipping_address .row > div, #billing_address .row > div"
  ).addClass("col-md-6 form-field");
  $("#shipping_address_same_as_shipping").removeClass("col-md-6");
  $("#shipping_address_same_as_shipping").addClass("col-12");
  $("#checkout p.required").insertBefore("#contacts");
  $("#checkout .form-field input[type=date]").addClass("form-control");
  
  $("#checkout #payments .radiobox, #checkout #shipping .radiobox").each(
    function() {
      if ($(this).is(":checked")) {
        $(this)
          .parent()
          .addClass("checkout-options-item-active");
      }
    }
  );
  
  $("#billing_address").append("<hr>");
  $("#billing_address hr").insertBefore("#payments");
  $("#other_additional_information, #contacts_accepts_marketing").removeClass(
    "col-md-6 col-sm-6 "
  );
  $("#other .row > div").addClass("col-12 form-field");
  $("#payments, #shipping").addClass("col-md-6");
  $("#payments, #shipping").wrapAll('<div class="row">');
  $("#checkout #payments_options li").addClass("payment-item");
  $("#checkout #shipping_options li").addClass("shipping-item");
  $("#submit_review_order").addClass("btn-block");
  $("#checkout .checkbox-field").addClass("no-label");
  $("#contacts_accepts_marketing").removeClass("col-md-12 col-sm-12");
  $("#contacts_accepts_marketing input").removeClass("form-control");
  
  $("#checkout #payments .payment-item").each(function() {
    $(this).on("click", function() {
      var getRadio = $(this).find(".radiobox");
      $("#payments .payment-item .radiobox").prop("checked", false);
      $(getRadio).prop("checked", true);
      $("#payments .radiobox")
        .parent()
        .removeClass("checkout-options-item-active");
      $(this).addClass("checkout-options-item-active");
    });
  });
  
  $("#checkout #shipping .shipping-item").each(function() {
    $(this).on("click", function() {
      var getRadio = $(this).find(".radiobox");
      $("#shipping .shipping-item .radiobox").prop("checked", false);
      $(getRadio).prop("checked", true);
      $("#shipping .radiobox")
        .parent()
        .removeClass("checkout-options-item-active");
      $(this).addClass("checkout-options-item-active");
    });
  });
  
  // Success
  $("#credentials_password").wrapAll('<div class="form-group">');
  $("#credentials_password_confirmation").wrapAll('<div class="form-group">');
  
  // Customer
  $("#credentials p").addClass("mb-0");
  $("#submit_login, #register_customer").addClass("btn-block");
  $("#reset_password").addClass("text-center mt-2");
  $("#credentials .error").insertBefore("#credentials_email");
  $("#customer_address h2").addClass("block-header");
  $("#customer_address .btn,#create-password-wrapper form .btn").addClass(
    "btn-block"
  );
  $("#customer_additional_fields > div").removeClass("col-sm-12");
  $("#customer_additional_fields").removeClass("row");
  $("#customer_details #contacts_email").wrapAll('<div class="form-group">');
  $("#customer_details #contacts_phone").wrapAll('<div class="form-group">');
  $("#customer_details #details_password").wrapAll('<div class="form-group">');
  $("#customer_details #details_confirm_password").wrapAll(
    '<div class="form-group">'
  );
  $(".pending-payment").addClass("badge badge-warning mt-2");
  $(".paid").addClass("badge badge-success  mt-2");
  $(".abandoned").addClass("badge badge-default mt-2");
  $(".canceled").addClass("badge badge-danger mt-2");
  $(".shipped").addClass("badge badge-primary mt-2");
  $(
    "#address #shipping_address_name, #address #shipping_address_surname, #address #shipping_address_address, #address #shipping_address_taxid, #address #shipping_address_city, #address #shipping_address_postal, #address #shipping_address_country, #address #shipping_address_region, #address #billing_address_name, #address #billing_address_surname, #address #billing_address_address,#address #billing_address_taxid, #address #billing_address_city, #address #billing_address_postal, #address #billing_address_country, #address #billing_address_region,#customer_details_password > div"
  ).addClass("form-group ");
  
  $("#shipping_address div.col-sm-12,#billing_address div.col-sm-12").addClass(
    "field form-group"
  );
  
  $("ul.nav > li.dropdown > ul > li").click(function(event) {
    // stop bootstrap.js to hide the parents
    event.stopPropagation();
    // hide the open children
    $(this)
      .find("ul.nav > li.dropdown > ul > li")
      .removeClass("open");
    // add 'open' class to all parents with class 'dropdown-submenu'
    $(this)
      .parents("ul.nav > li.dropdown > ul > li")
      .addClass("open");
    // this is also open (or was)
    $(this).toggleClass("open");
  });
  
  // -------------------- MULTI-CURRENCY --------------------
  
  // apply currency changes on HTML
  function changeCurrency(fromProductPage) {
    // set currencies
    old_currency = sessionStorage.getItem("store_currency");
    new_currency = $.trim(sessionStorage.getItem("global_currency"));
  
    // current currency on nav-bar
    $("#current_currency").text(new_currency);
  
    // cart total on nav-bar
    if (!fromProductPage) {
      $(".header-cart-product__price, .header-cart-summary__string--number").each(
        function() {
          amount = accounting.unformat($(this).text(), i18n_decimal_mark);
          $(this).text(
            accounting.formatMoney(
              fx.convert(amount, { from: old_currency, to: new_currency }),
              { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
            )
          );
        }
      );
    }
  
    // homepage product blocks
    $(".caption .price")
      .children(".block-price, .block-price-discount")
      .each(function() {
        if ($(this).children().length == 0) {
          amount = accounting.unformat($(this).text(), i18n_decimal_mark);
          $(this).text(
            accounting.formatMoney(
              fx.convert(amount, { from: old_currency, to: new_currency }),
              { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
            )
          );
        } else {
          orig_amount = Math.abs(
            accounting.unformat(
              $(this)
                .children()
                .text(),
              i18n_decimal_mark
            )
          );
          $(this)
            .children()
            .text(
              accounting.formatMoney(
                fx.convert(orig_amount, { from: old_currency, to: new_currency }),
                { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
              )
            );
  
          discounted_amount = Math.abs(
            accounting.unformat(
              $(this)
                .contents()
                .get(0).nodeValue,
              i18n_decimal_mark
            )
          );
          $(this)
            .contents()
            .get(0).nodeValue =
            accounting.formatMoney(
              fx.convert(discounted_amount, {
                from: old_currency,
                to: new_currency
              }),
              { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
            ) + " ";
        }
      });
  
    // product page price
    if (
      $("#product-form-price").siblings().length == 0 &&
      $("#product-form-discount").length == 0
    ) {
      product_amount = accounting.unformat(
        $("#product-form-price").text(),
        i18n_decimal_mark
      );
      $("#product-form-price").text(
        accounting.formatMoney(
          fx.convert(product_amount, { from: old_currency, to: new_currency }),
          { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
        )
      );
    } else {
      product_amount = Math.abs(
        accounting.unformat($("#product-form-price").text(), i18n_decimal_mark)
      );
      $("#product-form-price").text(
        accounting.formatMoney(
          fx.convert(product_amount, { from: old_currency, to: new_currency }),
          { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
        )
      );
  
      discount_amount = Math.abs(
        accounting.unformat($("#product-form-discount").text(), i18n_decimal_mark)
      );
      $("#product-form-discount").text(
        accounting.formatMoney(
          fx.convert(discount_amount, { from: old_currency, to: new_currency }),
          { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
        )
      );
    }
  
    // cart/revieworder unit price & customer details price
    $(".order-product-price, .order-product-subtotal").each(function() {
      amount = accounting.unformat($(this).text(), i18n_decimal_mark);
      $(this).text(
        accounting.formatMoney(
          fx.convert(amount, { from: old_currency, to: new_currency }),
          { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
        )
      );
    });
  
    $(".cart-product-discount")
      .children()
      .each(function() {
        discounted_amount = Math.abs(
          accounting.unformat(
            $(this)
              .contents()
              .get(0).nodeValue,
            i18n_decimal_mark
          )
        );
        $(this)
          .contents()
          .get(0).nodeValue = accounting.formatMoney(
          fx.convert(discounted_amount, { from: old_currency, to: new_currency }),
          { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
        );
  
        orig_amount = Math.abs(
          accounting.unformat(
            $(this)
              .children()
              .text(),
            i18n_decimal_mark
          )
        );
        $(this)
          .children()
          .text(
            accounting.formatMoney(
              fx.convert(orig_amount, { from: old_currency, to: new_currency }),
              { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
            )
          );
      });
  
    // cart/revieworder unit & customer details order subtotal
    $(".order-product-subtotal .new, .order-product-subtotal .old").each(
      function() {
        amount = accounting.unformat($(this).text(), i18n_decimal_mark);
        $(this).text(
          accounting.formatMoney(
            fx.convert(amount, { from: old_currency, to: new_currency }),
            { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
          )
        );
      }
    );
  
    //cart/revieworder total
    cart_total = accounting.unformat(
      $(".totals")
        .children(".text-right")
        .text(),
      i18n_decimal_mark
    );
    $(".totals")
      .children(".text-right")
      .children("strong")
      .text(
        accounting.formatMoney(
          fx.convert(cart_total, { from: old_currency, to: new_currency }),
          { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
        )
      );
  
    //revieworder subtotal/shipping/taxes
    $(".totals")
      .children(".text-right")
      .each(function() {
        amount = accounting.unformat($(this).text(), i18n_decimal_mark);
        $(this).text(
          accounting.formatMoney(
            fx.convert(amount, { from: old_currency, to: new_currency }),
            { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
          )
        );
      });
  
    // estimate shipping list
    $("#estimates")
      .find("dd")
      .each(function() {
        if ($(this).text() != "Error") {
          // for Correios Brasil
          item_amount = accounting.unformat($(this).text(), i18n_decimal_mark);
          $(this).text(
            accounting.formatMoney(
              fx.convert(item_amount, { from: old_currency, to: new_currency }),
              { symbol: { EUR: "â‚¬", GBP: "â‚¤" }[new_currency] }
            )
          );
        }
      });
  }
  
  $(document).ready(function() {
    if (typeof open_exchange_rates_token !== "undefined") {
      Jumpseller.multiCurrency({
        token: open_exchange_rates_token,
        callback: changeCurrency
      });
    }
  });
  
  $("#main-menu .nav-item.dropdown").hover(
    function() {
      $(this).addClass("sfhover");
    },
    function() {
      $(this).removeClass("sfhover");
    }
  );
  
  // -------------------- Custom Theme menu arrow down --------------
  $("select")
    .parent("div")
    .addClass("product-form_field-select");
  $(".preheader-menu .dropdown > a, .product-form_field-select").append(
    '<i class="linear-icon icon-0827-chevron-down"></i>'
  );
  $("#category-menu li.has-children,#mobile-menu li.has-children").append(
    '<i class="linear-icon icon-0829-chevron-right"></i>'
  );
  
  // Product page
  $(window).on("load", function() {
    $(".product-page .bootstrap-filestyle .btn").append(
      '<i class="linear-icon icon-0153-paperclip"></i>'
    );
    $(".product-page .bootstrap-filestyle .btn").addClass("secondary");
  });
  
  // category mobile menu - N levels down
  $("#category-menu li.has-dropdown a.first-trigger").click(function() {
    $("#category-menu").toggleClass("active");
    $(this)
      .next()
      .toggleClass("active");
  });
  
  $("#category-menu li.has-dropdown a.last-trigger").click(function() {
    $("#category-menu").toggleClass(
      $(this)
        .attr("class")
        .split(" ")
        .shift()
        .toString()
    );
    $(this)
      .next()
      .addClass("active");
  });
  
  // back button on category mobile menu
  $("#category-menu li.has-dropdown a.back-level-1").click(function() {
    $("#category-menu, #category-menu ul.dropdown").removeClass("active");
  });
  
  // back button on mobile menu - N levels up
  $("#category-menu li.has-dropdown a[class^='back-level-']").click(function() {
    classesArray = $(this)
      .attr("class")
      .split("-");
    classesArray.shift();
  
    $("#category-menu").toggleClass(classesArray.join("-"));
    $("ul." + classesArray.join("-").toString() + ".dropdown").removeClass(
      "active"
    );
  });
  
  // navigation mobile menu - N levels down
  $("#mobile-menu li.has-dropdown a.first-trigger").click(function() {
    $("#mobile-menu").toggleClass("active");
    $(this)
      .next()
      .toggleClass("active");
  });
  
  $("#mobile-menu li.has-dropdown a.last-trigger").click(function() {
    $("#mobile-menu").toggleClass(
      $(this)
        .attr("class")
        .split(" ")
        .shift()
        .toString()
    );
    $(this)
      .next()
      .addClass("active");
  });
  
  // back button on navigation mobile
  $("#mobile-menu li.has-dropdown a.back-level-1").click(function() {
    $("#mobile-menu,#mobile-menu ul.dropdown").removeClass("active");
  });
  
  // back button on mobile menu - N levels up
  $("#mobile-menu li.has-dropdown a[class^='back-level-']").click(function() {
    classesArray = $(this)
      .attr("class")
      .split("-");
    classesArray.shift();
  
    $("#mobile-menu").toggleClass(classesArray.join("-"));
    $("ul." + classesArray.join("-").toString() + ".dropdown").removeClass(
      "active"
    );
  });