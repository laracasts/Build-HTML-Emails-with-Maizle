<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice Approval Notification</title>
  <style>
    img {
      max-width: 100%;
      vertical-align: middle;
      line-height: 1
    }
  </style>
</head>
<body style="background-color: #eff6ff">
  <table style="width: 100%; border-radius: 4px; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1)" cellpadding="0" cellspacing="0" role="none">
    <tr>
      <td style="border-top-left-radius: 4px; border-top-right-radius: 4px; background-color: #1e3a8a; padding: 24px; color: #fff">
        <h2 style="margin-bottom: 12px; margin-top: 8px; text-align: center; font-size: 24px">
          Invoice Approval Notification
        </h2>
      </td>
    </tr>
    <tr>
      <td style="border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; background-color: #fff; padding: 24px; text-align: center">
        <p style="margin-bottom: 64px; font-size: 16px; color: #64748b">
          {{$username}} approved the invoice.
        </p>
        <p>
          <a href="http://invoice-approval.company.com/invoices/{{$invoice_id}}">
            View Invoice
          </a>
        </p>
      </td>
    </tr>
  </table>
</body>
</html>