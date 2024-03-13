
$(document).ready(function () {

  const loadingHtml = $(`<div id="form-sending">送信中</div>`);

  $('[inputmode="tel"], [inputmode="decimal"], [inputmode="numeric"]').keydown(function (event) {
    var charCode = (event.which) ? event.which : event.keyCode
    if (event.shiftKey) return false;
    if (!event.ctrlKey && charCode > 31 && (charCode < 48 || charCode > 57) && (charCode < 96 || charCode > 105))
      return false;
    return true;
  });
  $('[inputmode="tel"], [inputmode="decimal"], [inputmode="numeric"]').change(function () {
    const oldValue = $(this).val()
    const newValue = oldValue.replace(/^\D+/g, '');
    $(this).val(newValue);
  })

  $('[inputmode="tel"], [inputmode="decimal"], [inputmode="numeric"]').keyup(function () {
    const oldValue = $(this).val()
    const newValue = oldValue.replace(/^\D+/g, '');
    $(this).val(newValue);
  });

  $.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param * 1000000)
  }, 'File size must be less than {0} MB');

  $.validator.addMethod("extension", function (value, element, param) {
    param = typeof param === "string" ? param.replace(/,/g, "|") : "png|jpe?g|gif";
    return this.optional(element) || value.match(new RegExp("\\.(" + param + ")$", "i"));
  }, $.validator.format("Please enter a value with a valid extension."));

  /*   $('#zipcode').jpostal({
      postcode: ['#zipcode'],
      address: { '#address': '%3%4%5' }
    });
  */
  kntxtext.target = [
    ['fullname', 'furigana', kntxtext.constant.letterType.kana, kntxtext.constant.insertType.auto],
  ];

  $("#applyForm")
    .multiStepForm({
      validations: {
        groups: {
          birthday: "year month day",
        },
        rules: {
          fullname: "required",
          furigana: "required",
          address: "required",
          year: "required",
          month: "required",
          day: "required",
          phone: "required",
          email: {
            required: true,
            email: true,
          },
          email_confirm: {
            required: true,
            email: true,
            equalTo: "#email"
          },
          company_name: "required",
          company_address: "required",
          contact_info: "required",
          monthly_income: "required",
          payday: "required",
          purchase_method: "required",
          "purchased_product[]": "required",
          /* upfile1: {
            required: true,
            extension: "pdf|png|jpg|jpeg",
            filesize: 5, // here we are working with MB
          }, */
          upfile2: {
            required: true,
            extension: "pdf|png|jpg|jpeg",
            filesize: 5, // here we are working with MB
          },
          upfile3: {
            required: true,
            extension: "pdf|png|jpg|jpeg",
            filesize: 5, // here we are working with MB
          },
        },
        messages: {
          agree: "※「同意する」がチェックされてません。",
          fullname: "※こちらの項目を入力してください。",
          furigana: "※こちらの項目を入力してください。",
          address: "※こちらの項目を入力してください。",
          year: "※こちらの項目を入力してください。",
          month: "※こちらの項目を入力してください。",
          day: "※こちらの項目を入力してください。",
          phone: "※こちらの項目を入力してください。",
          email: {
            required: "※こちらの項目を入力してください。",
            email: "※正しいメール形式をご入力ください。"
          },
          email_confirm: {
            required: "※こちらの項目を入力してください。",
            email: "※正しいメール形式をご入力ください。",
            equalTo: "※メールアドレスが一致しません"
          },
          company_name: "※こちらの項目を入力してください。",
          company_address: "※こちらの項目を入力してください。",
          contact_info: "※こちらの項目を入力してください。",
          monthly_income: "※こちらの項目を入力してください。",
          payday: "※こちらの項目を入力してください。",

          purchase_method: "※こちらの項目を選択してください。",
          "purchased_product[]": "※こちらの項目を選択してください。",
          upfile1: {
            required: "※こちらが添付されておりません。",
            extension: "※PDF/JPEG/PNG　対応",
            filesize: "※添付するファイルサイズは 5 MB 未満にする必要があります"
          },
          upfile2: {
            required: "※こちらが添付されておりません。",
            extension: "※PDF/JPEG/PNG　対応",
            filesize: "※添付するファイルサイズは 5 MB 未満にする必要があります"
          },
          upfile3: {
            required: "※こちらが添付されておりません。",
            extension: "※PDF/JPEG/PNG　対応",
            filesize: "※添付するファイルサイズは 5 MB 未満にする必要があります"
          }

        },
        invalidHandler: function (form, validator) {
          var errors = validator.numberOfInvalids();
          if (errors) {
            var firstInvalidElement = $(validator.errorList[0].element);
            $('html,body').scrollTop(firstInvalidElement.offset().top - 200);
            firstInvalidElement.focus();
          }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          const formGroup = $(element).closest('.form_group')
          var placement = formGroup.find('.block_error');
          if (placement.length == 0) {
            placement = $("<p class='block_error'></p>");
            formGroup.append($(placement));
          }
          $(placement).show().html($(error));
        },
        submitHandler: function (form) {
          $('body').append(loadingHtml);
          //テキストのカウントアップの設定
          var bar = new ProgressBar.Line(splash_text, {//id名を指定
            strokeWidth: 0,//進捗ゲージの太さ
            duration: 1000,//時間指定(1000＝1秒)
            trailWidth: 0,//線の太さ
            text: {//テキストの形状を直接指定 
              style: {//天地中央に配置
                position: 'absolute',
                left: '50%',
                top: '50%',
                padding: '0',
                margin: '0',
                transform: 'translate(-50%,-50%)',
                'font-size': '1.8rem',
                color: '#fff',
              },
              autoStyleContainer: false //自動付与のスタイルを切る
            },
            step: function (state, bar) {
              bar.setText(Math.round(bar.value() * 100) + ' %'); //テキストの数値
            }
          });
          $("#splash").show();
          bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
            $("#splash").delay(500).fadeOut(800);//アニメーションが終わったら#splashエリアをフェードアウト
          });
          form.submit();
        }
      },
      beforeNavigate: function (form, step) {
      },
      afterNavigate: function (form, step) {

        if (step == 3) {
          if ($("[name='_confirm']").length == 0)
            form.prepend($(`<input type='hidden' value='form_step_confirm' name='_confirm'>`))

          const fullname = $("[name='fullname']").val();
          const furigana = $("[name='furigana']").val();
          const address = $("[name='address']").val();
          const year = $("[name='year']").val();
          const month = $("[name='month']").val();
          const day = $("[name='day']").val();
          const phone = $("[name='phone']").val();
          const email = $("[name='email']").val();
          const company_name = $("[name='company_name']").val();
          const company_address = $("[name='company_address']").val();
          const contact_info = $("[name='contact_info']").val();
          const monthly_income = $("[name='monthly_income']").val();
          const payday = $("[name='payday']").val();
          const purchase_method = $("[name='purchase_method']:checked").val();
          let purchased_products = [];
          $("[name='purchased_product[]']:checked").each(function () {
            purchased_products.push($(this).val());
          });

          $("#confirm_fullname").text(fullname);
          $("#confirm_furigana").text(furigana);
          $("#confirm_address").text(address);
          $("#confirm_year").text(year);
          $("#confirm_month").text(month);
          $("#confirm_day").text(day);
          $("#confirm_phone").text(phone);
          $("#confirm_email").text(email);
          $("#confirm_company_name").text(company_name);
          $("#confirm_company_address").text(company_address);
          $("#confirm_contact_info").text(contact_info);
          $("#confirm_monthly_income").text(monthly_income);
          $("#confirm_payday").text(payday);
          $("#confirm_purchase_method").text(purchase_method);
          $("#confirm_purchased_product").text(purchased_products.join(", "));


          const scrollTo = form.offset().top - 60;
          $("html, body").animate({ scrollTop: scrollTo }, 400);
          setTimeout(function () { loadingHtml.remove(); }, 400);
        }

      }
    })
    .navigateTo(0);

  $(".contactform-input-file").on("change", function (e) {
    const field_name = $(this).attr('name');
    console.log(field_name);
    const confirm_tag = $(`#${field_name}_confirm, #${field_name}_preview`);
    if (e.target.files.length == 0) {
      confirm_tag.html('');
    }
    var file = e.target.files[0];

    const name = file.name;
    const lastDot = name.lastIndexOf('.');
    let ext = name.substring(lastDot + 1).toLowerCase();
    switch (ext) {
      case "png":
      case "jpg":
      case "jpeg":
        const src = URL.createObjectURL(file);
        confirm_tag.html(`<div class="preview"><div class="preview_img"><img src="${src}"></div><span>${name}</span></div>`)
        break;
      case "pdf":
        confirm_tag.html(`<div class="preview"><div class="preview_pdf"><img src="../assets/images/icon-pdf.svg" width="50" height="50" style="width:50px"></div><span>${name}</span></div>`)
        break;
      default:
        confirm_tag.html('');
        break;
    }
  });

  $("#applyForm .submit").click(function () {

    $("#applyForm button.apply_link").attr("disabled", "disabled");
  });


  $(".previous,.back,.next").click(function (e) {
    const pop = $("#applyForm").offset().top;
    $("html, body").animate({ scrollTop: pop - 130 }, 200);
  })

});
