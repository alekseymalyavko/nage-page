// $("#contact-form").submit(function () {
//   var str = $(this).serialize();
//   var url = "contact_form/contact_process.php"
//   $.ajax({
//       type: "POST",
//       url: url,
//       data: str,
//       success: function (msg) {
//           if (msg == 'OK') {
//               $("#fields input:not([type='submit']), #fields textarea").val("");
//               $("#fields").hide();
//               result = '<div class="notification_ok">Сообщение отправлено. Спасибо!</div>';
//           } else {
//               result = msg;
//           }
//           $('#note').html(result);
//       },
//       error: function (msg) {
//           $("#fields input:not([type='submit']), #fields textarea").val("");
//           $("#fields").hide();
//           result = '<div class="notification_ok">Something went wrong :( Try again.</div>';
//           $('#note').html(result);
//       }
//   });
//   return false;
// })