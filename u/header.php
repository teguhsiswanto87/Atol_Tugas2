<?php
if (empty($_SESSION['username']) && empty($_SESSION['password'])) { } else {

    ?>
    <div class="ui secondary pointing menu">
        <a class="active item ui label">
            <img class="ui right spaced avatar image" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUTEBIQEhUWFRAXFRUVFRUSFRUQFRUWFhUVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFQ8PFSsZFRkrKy0rKy0rLS0rKy0tLS03Nys3LSsrLTcrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAQMAwgMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAFAAECAwQGB//EAD4QAAEDAgMFBgQCCQQDAQAAAAEAAhEDBAUhMRJBUWGRBhMicYGhMlKxwdHwFBUjM0JicoLhkqKy8SRTcxb/xAAYAQEBAQEBAAAAAAAAAAAAAAAAAQIDBP/EABsRAQEBAQEBAQEAAAAAAAAAAAABEQIhMRJB/9oADAMBAAIRAxEAPwD2czyT5rKW1vmaPRRArD5D5hVltLU3djgOixuNfd3fQqp13Xbqxh9SPsoa3VKY4SqmtjlykrJ+s3b6fv8A4WerjAnOi4+oQ0cAS2QhVHG2kZ03jofutDcSYfnHmD9kVG6qgV6TeIfHst2aFXNNz6tOq0eFm1PEgjVa6l+wfMfQ5IL9k/N7JFmWZJ5xmhz8dotHiJHogON9r58NuSBvfEH0CGuqfPzERxbqhtxiVNhM1W7Wnwk/RcDXxio4+J7z/cVnF3KMWvSLfFGOyD6bj5lnsVtpujJgYP7pXmNO6RXD8acw8RwKGu9a18Z68Z1VbSZOWR1gyZ4ofhWOU6hgjZdzOR8kYcPJGtYqhjUPcOECI5p6VQNybTcJ4AD7qVQDl+CrbSJOvvKIsawlsBuYz8Q1PBV1rlkNmm8QRMN+HnzWlzDpOnND6z3g65bpJ+iDHd3TmVO8pbTmEBrm7By5genuod7bhwfGy45zLmAnfLVtNdwGro4h0Doqu9Lv4svIe8oypdiNWTFe36FJT2P53dB+CSo6OUweNxQy7sHTLCYO6dPJUU7Spvc4eiY3o4CnIQWaoymPTLzTVBWByeM+RyUUZgcuiY0xwHQLFh/eknbOQ91VeVntdGZ4QoCBoNOrR0CYWzJnZCFfrJzdQVTWxp40H0TVdAFzHarHW0TsUwHVN/Bo580Lv+01UbQDiN278Fx19clziSSSTJ81WV93fveSXOJPn9kPqXBTQSqKrSpph3XCdlwsblEuTUwVZcLRSuUGZVWhlTmhg7RvCEYwzEQ5wa95bO+T7rkW1VfTrqxHpZwc6tqjPm7TzCTsLuG/DXPltuCA4H2lc1oY5wyyE6Eeeq6Gj2hpOcGgOnqBz8lVUVbW6Gj3Hidvf6rDXpXsSH1D6hyPX2N0WZZPOU6LM7tBRI3jlCQB5vN7S7mWt+yoLrxpz2/UAjyAW26x+P3bPV248oWP9fVN4Z0P4q6zUf0i5+X/AGp1P9f1fkpdD+KSGO0N6wayPROL6n84U327ScxmqzZN3LLfqX6ZT+dvVSFwz5m9QqP0amNVI29MbgirW12fMOoTCsxx2ZBPVYauGt4jM6xokMJp8T6ZfRBvdTpnUN9VVVw+k4ZtHmswwlk5uPVV4la93RqOa53ha45k7gorz7tI9orPDCC0OIB4wgopFxyV1w+TPH7rbh9Hep1cJDULXZbzWK6pcB+CNvCxVguetfkBuLZw0EqulaE5nJF3BSa1T9VfyDvtOCiLZ3Ao1shX0mjgrOqXgE7lw1T0mO3LpG0BGYCsp2bdwAXSVjABkjVd72YwhgaKheHlw2hGey3fEb5C5+8w+WEgZjMLb2TxJzKVVuoa0u4FsgjL1W56zZgXdvLnEzqXHzklWWWHve4AbRJUqFuXua0amB6r0XCcJZQblm7e4/bgFaz9cTfYTUpjxhwnefxWCnbmdSvT721bVYWO3+x4hczaYE41Ic3wtMHmNyytc1+jniUl6Y21pjLZb0SV0c1f31Vr4DohQde1o+Morj1kx0OgbX1CFnDmHd7lRWR1zVG/qmN87iPdajhbTv8AdVPwto3T6mUXSGJv3JmYk8HIDqVY2yAGSibWePooQ1XEakSGzGeU5LBi+M1n0HNJhrgQirrUgZyEKxSmak027m++5ZvjUmuTp5mF0FrRhqE4dbftM9yPkZLHVb5jPUasVcLZXeBqVidVB0KmtRncFAFXvCqaxYtahAK+kFABW02pKVexy1UjCyUwtLV11zxsY5DLOuKL7hkfvKZA89URooY+mXXDxuDczwMQPdb4rn3ELe52Xh3Az6gr0TC8UFQagrz423FEsGljxmYXW+ucegPrNaNokAIJQ7RNdVc0AbMwDvPNUXtXbAa3mTn/AAtBJ6rlDbPa6RksNa9G/T2cUlwoqVfyEkNd7VtQRnqsrbHxQeBRFZ69Qh44EGfNGmenhzC0zJMmJyghZ6diYdmRG6Fv7kkktfAPrmq67gxhaCS7lxRKGmnkStNC2JZkCJ3KFWl4d+mu4q/CrlzgWaFoyJPqMlCQzrV4bAbOeusBc7j7u6qmBBcGnoIXWWtRxJ2t0Lnu1VAOeDOYDek5hY6dOPrmrel43OjImR91rhTLANFTVdC5twPvbWeKDVKbmnKYRS8uag0yQa9uXtdBIdzA1VF1K5dvW2m+Vgo3ExtDgiduwHMLnWoUK1hTkKT6eSRVtJXsCD1K726Jre8qHcVuMV01Fqt7IialZ5EioQBIkENP+dEKoXT20nlw0bkf5jl90bwbtFZ0mMYA/wAIEktGu8rrxHLqi1PBqD3udtf2tyDY5LVQwamzTxcnf4XEnH2trvdT2g0ulp0OcbvNFB2mcSCajcjpEBbZdWLCnn4GiQQY4FDanZ1pJ8ZAnLKUOr9o3a7TMtQBKHN7Q1HOL9tw5AZQg6Udn28UkEGLP/8AZV9kkR2gCi+mDqpJ1GmSpa8J+ipZbNJghEE2wJneqK+4bEQhl9YyZbLXDfMIwqqtHa3oAlU1SNl7yfI/dUXVmQwECRnJ16roDbgDIZpSGNE+qzYsuOJcxZ6rUTuwNp0abTvqsFYLk7BtaN6EXVBsyEWuWrFUoqauQJewl05opaEgJ2UAr20gE+riVAyseJYhs5BFqFHwoRiVmZkCVJygSzEXl0RMn7o/YOIf3dVmyTGay4daQ7aEAroLezBO047TuJW7n8RT2gcGsZTGW0ZP9I/yg7LWTA16rT2gO1UI+UBv3P1T4JZOqSGnxbLi3OPEN08dV14njh1fWWizxAnTI+iN07djgXADNw9kNoU10+C200myBq4+krbIZVoNG0BMmMuHFV2tMAOB36IiylJJ4l3SclSLeXt81FW7H5hMipohJQdSkkkopJJJIEmc4ASdAnWLFakUXnl9wgFYh2voUyWgVHkcAAOpQa97cMdAFKoIOZlp+65HFqhL3f1P/wCRQt1RKsehtrh4Dhocx65qqqFgwSrNJo3ge25bnLhXfkPuAsFYojcFDqrVGkqMwtTQqKdcBkRmr6Lg4apqUQpt8KxuIJhaaFVpkAgwhlI+I+Z+qqNbbcTkETtmwJ4Z9FRbMlarxpbSceQ9yrPrPXkcxcNL3EneSeq1YNdPpu2AJa4wRkDpkQToRxVtK3LoDQTPotFbCXAgbOZ4L0RwZ9mDH4H6LscEsj3LScvD1nNcuLNwygzHBegWrIptbwa0ewSjnTakboyCaxttqq0eZR27tJ+HhoseG25FU7QiB9UMbP1e3iUlsTqGEmlRICy1KdWTsvpwdzmmR6goraksbDAzcJ5DJUyJLpcfMwOiDZXrholDsTP/AI1TiWOPtKou6wcHAbw4fZRw6p3tFu1w2T5jwuC1IjzC9dLncyT1z+6poUG+ZWvGKBZUI3Zj+5riD7bHusLHwVK1Buwr7BjjCLipK5nvMpWywvJyMZLh1Hbmt10+FjbUDtCPLRX1BKz9wFiN6hUYeKrpsMqZZzVtNrjpHutGNNBkDzV1vQ8SyvuHCAWTzlGsMoTBRm1staC2VbIVGFoJBlp04K1tvAAktJEgxMeaI4dQInacD5ZBdOZjj11obYYVsfCATxIz9EQZaAfEXGfrv8lvNMFP3YW2WCuxugZtTll9CttPIQk+kI4KthyOcxyUF4CopM/aOPJoUqVaQDETzULeoS9+WUhBpBTpdEkGDaz1J1+qjUrc1S+oqHPW8FxfvKHXd0XGBoo3FbOAVUxUWU8lLCn7NSpT3ZPaPP4h1Huma3esl04tLarRmzUcWH4h0SJQftxYbL+8Gj8xyIEO+x9Fx1Qr1vELVlzRLRo4AtPA/wAJ+i8pvqBY8tIggkRzGsKdReTUK+5SLyMwsLnKTaq5WOkdFh96HeE6rXVZOi5UPzlFLXFSMnZjjvWLMdJWt9E7iVrsmO4ys7L6md8eivOLU2DKSd27PzUkLRJtIHN0QNSdB5o5gTmODnMO0GFoJjLPgvNa9/UrPBefCCdlv8I/Feh9gyDTqtOZMdIhduePHLqutZDhmAmFADTTgqLF+ZaTm0x58PZbVWGbu9nQke6tY479VMrPWBbmMxGigjdVc2tg7yT9k/8ACd2Spt6ZmXZzMyegWlzcj+d6B2sEKk3TWnZgySpXchjo4H6LDbu22Db/AIRtTyQb+/HF/wDpSTNfTIBEpIA73qD3Q2VU56as/wDZg8V0GZh3qxgVVHMK8BQXMGSwC4G2W9OBW1xhpQ2nRJJKDbg1z3bjRd8JJdTPLe30Qvtvgm1NZoGYAfxBGjvxSxGo6WwB4TIO8O3LNcXtw8bL6ri0yC3IAjgYCumOGqUyNdVKhaPcYa2V1FTDA8aCVQyzIOWRGqw1FFLs6+J2meWZj1WetYuYS10SPzKI2FB9J+01xjeDnP5lE7y3FUS0w4DQ7wPusVuOdZQWaswuOyNSiNZ0TqPNbMCsdt22RmZjySQ6qNfDQKAfH7vZnmHENJPqUZ7D1yK0biAFuuLWWd0Phdk7mNVrbhjGxsiIA0yXRzGbkhtQPkDKHfUFare4DhKDWNsGknjrOeStt37Dtk6FRBsFOsrnmMlK1rbQz1CC8hQI0U0lBmvKwa105ZH6Kqyqhzf+sxC112AtIIBkFc7RZUaYZtBAW7ocAnWD9Dq/zdUyASamRV91k1o5BD6L5cRzW69OYC2GoNyV7QmpNgK0IK6yraxWuzShBkrUpWc26IEKDmoB/cwVL9HDs9CtbmKoCCoql1oqn0AMxkUTbms90xF1yt/bl1cNGjszyj4uq7DDbQU2DKDHQLBhdttOLzz6A/ijm5RDUGSZK1alU08gp0yqi6ko3dORtDUKVLVWASqJWtXaaFCk/ZfCptDsvLVbciCCsgox0hUy7a3Rko2j9QrnmPzzQO+oBqkyNQgmM30EMZrqeQWm0uIaAfcqAqksv6QOfVJBw+GmapHB5nqiTxL/ACWSzp7N1WH8od/qyW6gJJK2auATlOQoytBgkkUgVBFNCkkoIbKhUYrVFwUFTAs9++G9B1MLUBmsGLOhvqPqgtbVDCykPlk/0ggDqSijTkqK1MAgwJgZ741V7NEVYCptVcQptVRcwq1hWdhVrUFV0IcHLRdnIHmFVeCWqNzU8Deag12rsz/b9Fp77QZb9SEPoPiT+dIQLtTVc3uyDEh3UEIOmq2FJxDiASN86qVKzaN3uvOXYtV+YrTb41X3PMJg9Fy4ewTLhf1vcfP7D8UkwEKjAKpdvcwD/SZV1s3JYb2uGweB9t6IU3ANkGZiPI5qiblWEpkSosV1EkyYlIKB0ySSKQSKQTv0QVN1QzG9wG8tHuEUYEOxRv7akOLmexlAYu2SARuiVBrjCm2p4iD+QlsQUE6L9oc1MIZa1NlxHNFGuBQTaVY0Kli0NVCq55LHeZAToBJV9wcwhmK1S6p3beRdyHBZGihVJbJ/iOXkl2otdqhTO8O+oULcgu2RmG5eu9dI5oLRIGUJRwVr2drPG1sROm0YPnCNYf2WY3Osdo/KMgPVdFMLLcVwBqEvQy/qq2/9YTqj9as+cdUlP1UcpdXW01zT8UH1RPD3zTptG5jAfOFxWM3RJbskgk+y63s9SIYCeCqi9YwITNyam+IqVQSqiASSKSqnSCZIIJhReU8qqo5SCylqhly6bml/UegBRJhgShbBNakebz/tKAFjeM1m3Tw0wGP2QPmAhdpTq7TWE5Hwqm6tWF+05jCdxIE9VaN3mEowvPiPmUQoHIHNCarvGR/NHujDW5eiC9rgVcwLJSOa2U0EalEuM5INiFQU3OIzc46+mqK4leNpMJceQ5lczQmq/aKA5gNHiul3IRhjIRcaKUCbsudkyZ4bvVUMwwEE3Dp/laYA8yrn29UEw9gHU9FTVwfa+OsTyDYn3UDRZjLZp9UlT/8Anbf56vskmI84xq0LazSPhJy5Hgu5wz92ByC5PHK2gGsyOSNYLektAOq1ijlMqZVNN6mXLSGcFEqZCrcUU4KeVWSk1QTc5VDNJ5KlSCZghiDopkcclC2pT3Z4T/xUcWfoOH+FrsG+AcRKg0XAlUgmR5hWvcoAaFAKq/vncA4lHKDtoIViNKHyN7Wn1GRUsNuc4lARAzW9gWN4mCE2JXPd0XuGoaYjp90tQIxit3lSNQ3IczvKss2AaIZbVJ0ROiUij1m7JFaRyQSyejNAqVFD255J30Z/7We9qHayVBq8R0UEyHcUlHvv6uiSivKaoLqu0dJj0XTWFtHRDWWK6KwbLQuyVopBXhqZoU5VDEKhxVj3LO4rIZ5UtpUuKYlTBNz5Wmg1U0aavcYCtA67zciOH6Qh7myVttCpYLbkQnolWXTZCzW7s0wXXNHaagJcWP8AVdPuQjHLXLaA81ARtK0gZofjdw7unQ0kEho001JVWD1p8JRLF6P/AI9QcKbz6gTKDl7aOY5ERvKMW9Rcha4zUgTB01E+6IUsbeP4Kf8Au+xWvFyuxt6sI3YmROf0XA2+OVtwpt8mz9V0WC3dR+0S4wImefADILNRrr6nfmUwCtyJ4JPO4arKqNrn7FOobB4JIOZpolZaJJLslbUxSSRFTlQ9JJSKrSSSQbGblCuck6SUjKFpt0kkG93w+iHD4kkkBJmgUbhoLDPNJJZo520MVMl0OKH9hU/+dT/iUklB5Ta7vIIjSSSUjYnahdT2e0f/AG/RMklBQHKeaekZkngUklGazueZSSSQf//Z">
            <?php echo "$_SESSION[full_name]"; ?>
        </a>
        <a class="item">
            <?php echo "$_SESSION[position]"; ?>
        </a>
        <div class="right menu">
            <!-- <a class="ui item" href="logout.php" id="btn-logout"> -->
                <!-- Logout -->
            <!-- </a> -->
            <a class="ui item" id="btn-logout" type="submit">Logout</a>
        </div>
    </div>
    <!-- logout modal -->
    <script type="text/javascript" src="../assets/js/app.js"></script>

    <div class="ui basic modal">
        <div class="ui icon header">
            <i class="bullhorn icon"></i>
            Keluar dari Sistem APO Administrator ?
        </div>
        <div class="content">
            <p> <?php echo"$_SESSION[nama]";?>, Anda bisa login kembali kapan pun dan dimana pun</p>
        </div>
        <div class="actions">
            <div class="ui yellow basic cancel inverted button">
                <i class="remove icon"></i>
                Tidak
            </div>
            <div class="ui blue ok inverted button">
                <i class="checkmark icon"></i>
                Ya
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#btn-logout').click(function() {
                $('.ui.modal').modal({
                    closable:true,
                    onDeny : function(){

                    },
                    onApprove: function(){
                        window.location.href = 'logout.php';
                    }
                }).modal('show');
            });
        });
    </script>
<?php } ?>