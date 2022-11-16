<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
    .grid-container {
      display: inline-grid;
      grid-template-columns: auto auto auto auto;
      gap: 5px;
      margin-top: -1px;
    }

    .grid-container > div {
      background-color: rgba(255, 255, 255, 0.8);
      border: 1px solid rgba(0, 0, 0, 0.8);
      text-align: center;
    }

    .polygon {
      width: 100px !important;
      margin-left: -120px !important;
    }
  </style>

  <body>
    <div class="grid-container">
      <div style="width: 219px; height: 325px; background-color: #f08619">
        <div
          style="
            width: 200px;
            height: 310px;
            background-color: #fefefe;
            padding-left: 2px;
            position: absolute;
            margin-left: 8px;
            margin-top: 5px;
            margin-bottom: -5px;
          "
        >
          <div>
            <img
              src="/public/assets/images/tag/polygontop.svg"
              class="polygon"
            />
            <p
              style="
                font-family: impact;
                font-size: 20px;
                margin-top: -110px;
                color: #fefefe;
                padding: 3px;
                font-weight: normal;
                margin-left: -140px;
              "
            >
              NO URUT
            </p>
            <p
              style="
                font-family: sans-serif;
                font-size: 30px;
                margin-top: -28px;
                padding: 3px;
                font-style: normal;
                margin-left: -160px;
                color: #fefefe;
              "
            >
              01
            </p>
            <p
              style="
                font-family: Monospace;
                margin-left: 50px;
                margin-right: 5px;
                margin-top: -60px;
                font-size: 15px;
                font-weight: bold;
                text-align: right;
                margin-bottom: 18px;
              "
            >
              UMRAH GROUP
            </p>
            <p
              style="
                font-family: Sans-serif;
                margin-left: 60px;
                margin-right: 5px;
                font-size: 11px;
                font-weight: bold;
                margin-top: -19px;
              "
            >
              <b>16 - 24 SEPTEMBER 2022</b>
            </p>
          </div>

          <div
            style="
              width: 120px;
              background-color: #fefefe;
              height: 150px;
              margin-left: 38px;
              border: #f08619;
              border-width: 100px solid #f08619;
              border-style: solid;
              box-sizing: border-box;
              border-radius: 15px;
              margin-top: 20px;
            "
          >
            <img
              src="{{asset('assets/images/tag/pemb.jpeg')}}"
              style="width: 100%; height: 100%; border-radius: 15px"
            />
          </div>
          <p
            style="text-align: center; font-family: Sans-serif; font-weight: bold; margin-top: 10px;"
          >
            DADANG KHAERUDIN KOMARUDIN
          </p>
          <p
            style="text-align: center; font-family:Sans-serif; font-size: 10px; font-weight: bold; margin-top: -9px;"
          >
            Contact Person TL : 08127874500
          </p>
        </div>
      </div>
    </div>
  </body>
</html>