<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Thanks</title>
        <style type="text/css">
            .text-green {
                color: #00929e;
            }
        </style>
    </head>
    <body>
        <div>
            <p>Thank you for your order.</p>
            <p>You have purchased {{ $order['quantity'] }} cartons for the total amount of {{ $order['total'] }}</p>
            
            @if($order['payment_method'] == 'transfer')
                @include('orders.partials.payment_details')
            @endif

            <p>Please expect your delivery within 5-7 days after your payment.</p>

            <p>ขอบคุณสำหรับยอดสั่งซื้อของท่าน</p>
            <p>ท่านได้สั่ง น้ำแร่เอวีเต้ซ์​จำนวน {{ $order['quantity'] }} ลัง  ยอดโอน {{ number_format($order['total'], 2) }} บาท</p>
            
            @if($order['payment_method'] == 'transfer')
                <p>
                    กรุณาโอนเงินที่<br>
                    สั่งจ่ายในนาม: <span class="text-green">บริษัท เอวีเต้ซ์​ จำกัด</span><br>
                    เลขที่บัญชี: <span class="text-green">0963016373</span><br>
                    ธนาคาร: <span class="text-green">กรุงเทพ สาขาตึกเอ็มโพเรี่ยม</span><br>
                </p>
                <p>
                    กรุณาส่งหลักฐานการโอนเงินมาที่
                    <a href="mailto:account@avitez.com" alt="account@avitez.com">account@avitez.com</a>
                </p>
            @endif

            <p>รบกวนรอสินค้าประมาณ 5-7 วันหลังจากจ่ายเงินเรียบร้อยแล้ว</p>
            <p>
                Kind regards,<br>
                Narada Ewing<br>
                Operations Director<br>
                <br>
                Mobile: +66 (0) 97 035 4232<br>
                Office:  +66  (0) 2 185 3321
            </p>
        </div>
    </body>
</html>