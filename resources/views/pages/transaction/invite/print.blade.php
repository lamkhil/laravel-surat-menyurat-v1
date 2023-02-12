<link rel="stylesheet" type="text/css" href="https://filkom.ub.ac.id/legacy/assets/css/v4/style-print.min.css" />
<style>
    @media print {

        html,
        body {
            width: 100%;
            height: 98%;
            margin: 0;
            padding: 0;
        }

        #footer {
            position: absolute;
            bottom: 0;
        }

        .page-break {
            page-break-before: auto;
        }
    }

    html {
        font-size: 100% !important
    }

    p {
        margin: 0 0 5px !important
    }

    body {
        font-size: 14px !important
    }

    .table>caption+thead>tr:first-child>th,
    .table>colgroup+thead>tr:first-child>th,
    .table>thead:first-child>tr:first-child>th,
    .table>caption+thead {
        border-top: solid 1px #444;
    }

    .table-bordered>thead>tr>th,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>tbody>tr>td,
    .table-bordered>tfoot>tr>td {
        font-size: 14px;
        border: solid 1px #444;
        padding: 5px;
    }

    table {
        font-size: 14px;
        border: solid 0px #fff;
    }

    #footer {
        position: absolute;
        bottom: 0;
    }

    .tr-bordered tr {
        font-size: 14px;
        border: solid 1px #444;
    }

    .tr-bordered td,
    .table-no-border td {
        padding: 5px;
    }

    thead th,
    table .num {
        text-align: center;
    }

    .catatan {
        min-height: 100px;
        padding: 0 5px 10px;
    }

    .catatan p {
        line-height: 1.5;
        border-bottom: 1px solid #999;
    }
</style>
<html>

<head>

    <title>Print {{$data->explain_name}}</title>
</head>

<body>
    <!-- Generate Surat Keterangan -->
    <!-- =================================== -->

    <div id="header-report" class="col-md-12">
        <table style="width: 100%; margin-bottom:4px">
            <tr>
                <td width="100px">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAB4FBMVEX///8jemAAAAAEmUr//wBJJ1QkfmPx8fElgGWlpaWampodaVIidl0gcloABQCioaHg4ADR0NMAGA1ycHAWDhEmhGjLy8sQRTXXVCj4+Pjj4+Pq6uqrq6/h4eHZ2dkfbVUZV0QcYk05OTmvr649IEa8vLwYVUIQOCy6uroIHRcEmEpMTEwEoE14eHgxMTGDg4NhYWEAEAAkJCRCQkKJiYlWVlYNLSMGFhFpaWkaGhoMKSAAAA0TQzQCgT4pKSkAy0cA2UsAtj8AulEAJhcAdikAUhwAkzMAXSAAgCwARhjv7wAOAAAAw0QAMyQAGgkAFhkAJg0AqToAABVGQwCYlgB1dAAALg/AwABdWwCpqAA1AELV1AAAHgAAXCwAajIAHhQAPxsAmzYrJgC0swA0MAAjHQB+fAA+FFYtAFlCH1bJwMwnHCBPTABiR2sDbzUAGxwAxVbQRQtBTEccFQCKiQAdV00AZB6tojNuVkpUNlFiSE7AsiWbhzeEcD+MeD3PxCJZPE+1pSpzWkWTgDj//lZ0XXyqm66OfpQ5G0eBa4hWNWC+ssIANgodDRgSMC7o0cnaopRoJw7PWjLWdFhFAADNfmi2RyLPe2Pdt63w2tPRWC7rXCxKEQBgMCLYqJvQMwDV3oq8AAAgAElEQVR4nN19+WMTV7KuVJhWW0sbL62mpdHS0rPaQpZl2VpsWd7wbtnGDiB2MAGSECcsL1zPkpk7d+a+QGYGSCbcTJZ5L/OvvqpzulutxRBLNknm/JCALdT9ddWp+mo51Q5HGyvs/snWYDv3e+ilZuAnW6ng20AYjP10CCcDbwPh4E8HEMD/NhCmf0qE7reB8KcECDNvAWCcLjTR/ROs3CRe+fhNjTqKl5HejtVuWK4UXrr72C/jH8PLjAccqustL9XhoIebV48ZIHeGaYdj/G3vwBFu4yaP25qG2dXiaG8SEc9bXJEEOBzddO3MMQtxgiFU0Sl6ReEtLtGLrjBI1x47XlvTC4aSjm6Kzre6xIWcwzFmXP34livPEPodgZj2thEqoybZcB0jQrYRIO/CP7xlgE4hMtPr8MMxC5FfAO2MazRRjxB3CvvvMUKU0RVyHRoYOi6AQbYNKILxg89+cVGIRP+jrJeVyHEiVPpVh9u8g2NZKrejRH7zik1aohjVk9LS8moVEseou0IEwo5Q7Bj1NDhheV4/RCyEgjNaBAkW52ZnF48VoVPY7Hc4cuZGOfrlGjW4xSBSU8VCIvp0gNVFWLu9vARwrAZW0JB2q/wmxo6e2QRMgBmHYwhqV42UAJ7PzVf5Lz3HaWqcwq2Mac5hJHzEAOOTBsAJ1REei5qiEjwSVGFxdqeaXVlcBPAeL0JvZcihmgH4kUIMW7knokyjm9YlhSQs7kirc4twe3ZuFaRjdpKygq44YHD+kaNTVFd6xARIxL4HfKakBAXWNjb2F1dRjLPLEpSPHqHXKdu+1NuHVjRgPu2eo0CnBgfztQAmHyCAlh0VPEVYnd1A7ZSOaRuKCYCHUWfNcEcoAg7HjPsZDXUGzhXy96TtYWAaVbR7Mlp7pgqg8NDKrNxeXr69BAXvEQNEtXz3wmX83hpEjQhNOGXc0UhPJxzVPT4+ZoMHA3GVkjRRm5xKVSm7ug/V2dmN2Y21ul8dEUL9/Pr6nUrJ2hco1YFBKwIgetPTfrjotsODcUrjBfrBY9sVPrg9vwWwPb+xsTG/AvpR4+MIu7pOVUq1H4lRIFBDNeXKD4aCbYkyXIM3NjqICqr6Y7fsANED78yuAmSrSysr6BAjR+8qZOXuqa6urjt2soSXzeDdBDID1v1Njre3I81/PjEYoEcU7q8oTjsIvNQ8MrW+apZ9LnoMrkKIVghh18Up2fbDSB/5ezU8UZPBZFsIucXifw7687Dplesvjwh3YAkJ6ewyFI+HsPmm7hDCSxXN9mwFUYE0OfxgzjQ56bZ246iJMDzkHoHNSGP0RwjXtuYR4O01STsmNlO6SwhPndfrHqDoWRjoIYyubi6H9pL93NT4HcFJ6NO8zmYIEViDteXVxaVswXdMAIUEXCKIlx/WX0DAxzuSCRhZYphsL0PNTU0ON6Qm132/YKItsU+ce+mTj4+P6vcI4pNzjb5WkLUtfPz8JlPtucXADOMNFO/WfbeoKRpTWW8Skno56hOPkW8L3nN3r6x3XXmnmU3I2ngQKRatibYAOoJ54/G4N+u+GJmMlN3yiIIHKJlxrOEEfr2vBB+9d/lc8z4QKSIeNxWtneXqp38cCzsGs7YLehfymZF+DPM1GUkj7X9LaY8JrKzp56Yg0fzl2SHTpbUbSbGMAZKksD3vtIlRaC6PdkiRdSjJ5LMUJcIV1es7wlVTS1EUylCoPWTjfxEImLSkTYC8UohkPrBXCxq8I2jAulOqI7Qgl0CRneJWqifXpzhRml69TzqylUzYpCVGrMBF9On8D0IUzLRNrF2Eg5PcmbomankZH2XyAiNBh3tBlkBDpSVD7d9DLRK8t8a7e45odVcUu8TkAuiMb4jalIFV2MRYkTPwtlNvPA4bdTlymxab8f5vRJgbyGWQaONzFRMp+qSaZwj7+tu9VPMa4AgTZa/IBQaktmjdzr9rBNoLcUeQc5q267X836PQerYshILiNpI2iQhIPmdhwMEyqalNisCPHqEODzW6OHomZN+C9+H59csv+aZHb+hnDg3aDoTVvEFq41BjpD7Os6EYSeDu90kwkM9gsK3mI4YMg70dL1cN4cPLF4E2HpKbEgbCZVjveu8cRcSCthcwEm8dpMA5ee91DL6omWoxUmQ/JVNaFnwsfzGoOlyjHgNhHDpefjvCriegoEPSpCJe4Z33GL8RqBY14TK6sybaD/R54i7uCM/Y/K0QKeAPS4JQwL3HEeJH/be8hpb+CtZPdbQu2RHqnyAktGiIMBkRNbjWZchQXnCbWepc+2E+p0QZpLdGbMTDC9kroeJ4SxCVPQzhTNyNBk4wEXZ1tk7ZEKJyYpB//qEXTU3JK5c/OUUsnN2E9Cuz/6yDFD/v70L3ztP4gl7+D2bZZD3pFSJFyeMtFrnObqKQjwWhZ+oChoegibTrWVLj1F1mS8XKkOHvO+ld4N8w7nD085o2LO3rUaQvYhQ5G6qNVgDNmyjrCabEx4EQn+q717pOVRRkw7oo63dPdV1g+VrBt9drSCDWQU6Rl0HGHI4MIcRdsDS7cf0hXaAkIcpikhJToixzznYsCJ3C1LvX1j8qIcKyiII8dYfnncUohgTc0LQZOvHFTRu6+AWRp2d3F7eybN9DuQxm6kIQhWOTIerpuXtXzutouXGneOCJkdJjZX3OaDrqITIRurfYl24tL8L2/P6UJgoKSCARQFEWtP/QmOIcC0IWPqGWlsjjo983cpYicTZuaNoMDu0Ig444xU8ow8W5xbXZZQwLBTkqoSll9dGt/dU1cB6PpeEqkkBgSbLWHnTDBgGn5hPJsPUdLF5TC/O6Pe5DaW2xb35lt0osI4naKmqlra3nGxv7RBqPCyHFE7glICLKpaKZ4Be23KYAOirQjBgUg0eIPljdWYLq7vwyWu+IBBEZ+fDt27C7TVI9RoToh/FKpYgT2A9lupY0xFukADrqzODUvdvhYhGLPLW2MTdfXZudx12vAcgaPJfm52Ftdek4ZcjMmBhN4p0gccPL6MhQfUyzDBXrYI0aCFWGEDfi0u35xeu3F9E3JaAoJrc31nb21zY2luD1lmb92qe//vWnp9pBiN6WlRJEIos6ok1MVdBJecBlMuCOWk/6DUVXgWV80ZTB9W3IwlpR1EHX0PKsPoe+tW1Iyq9D+Olvfnv//ffv/+7TFtg//f0f/vCfv7aDr+M0PrzkFOttocCCnD5cvgYJ2QMmqYSOehU59WYpU3YRD+zsLG5vb+y8IyIrLcDa7Aos7+ysQvlghOu/vv/B/ZO07n/w+wZp/fq3H3zwPq4PPvjdH1sjjLxzBVkMT9KU8TL6J3e61s8XcINYnSedADRIQ8ZEiKH22vzcTnZj9aVcBC25X61K+3Nzc/tMiVsj/PQ3Bj5aH9il+Mff//Z961fvf/Dr9dYIkZdeYU+QEGpwB5/Z5YdyomIdGugIIX9K6FvN6qeYuL64s7WzUpYBPMXb8wDVlf0lDBQP4DTrf7hfw4dS/K9r1m9+f/J9+69Ovv+fLbV0CiNCjJ/IS5RB0e91GQgHjgmhU/Q8RFRFNNzgI4SIr2qUt5sRrv/p/vsnT9bDWDfwvf/ByYb1wW+aEbIQGH90lyozGHK/c4n9rXDECGtayjZ8ogQ67nRJeLi8sjI3t7FS9LVm3tf+UC8ltpgQ//jnJnwE8b/XmxCKvEb63jm8MCKcusY+kJATe0eJMGdHiO7JW0o6NUgKiWp2aXH/uW4kABoRfvpf7zejeP8PKMD/PNmMnP3yT00I0fHhRuy6846nhvDJlE9IzBwNQm5p3Ka3MDFGIFlACuwBKjx5zCxVPcL1P3/QAsbn9+//nz/+tpUAuRT/2KSlchmuoDrQNilAAi0rxsMKxv5HJMO05fHrKqCihl4qqUMx4fHWCk91CD/9XQsBfn71s7+FAn9tLUBa90+uN3MaHS5cI4TojaP6+a4r9wpeQTgqWzpRx2mcrIQgijyiKSaViGCvC9sR/ncLPfz86scfOlxPPzsYIG3FFrxUgXfPQ1REhJ4oXK6UKI45KkuTqmPelBhKaIriwT8UQJNl3JIRj89rFFFqCP/4u2Y9vP/5Zx86Ap9dvfoafCdpK65fakQo+hJljGScRfAk4GHUyIEfDcKYQW17OUIhUoQZd09MkZ0l2hiiJqXy0CfxsoaJUPrTX5s19OrHf1N7nx1gYezrt3/+bVNsIYhypCRFi4BU0cmvRZzGfQQIJ+0RMK4FgHGXIzQe8VJ0iCRuMOjyj0GfPRMVh/tNOO5ffaq6fgw+Juzm6Ik9XAkDXt2o1DCEPUeA0PwKlsVwyoV0MEzhWM+Cryhp6DVYHq8bUszlWwibb/pZUH32Jv201v+qQ+jzcVCitwicO7GabARC5mHWjpi3iZBlooQIyk9NpxDhllYsekSNHUEKDYyqmU35YIT3UUE//OzH4qtHKGjFqQJvTqSIlP/BmyjLPqtLATo6Gsy+YcTMJiYIwCA4XPliWUr6ZIWdBewfCTn8A+KBCK/+BQX44xS0BcIEPLkHOstdRAC4q5rC4NuZ7TZ7vjvppOVpAhQaK5EKHsrbDcIk84Ulr1yAeMCfoyv494QDEKIAHX87+eMF2IhQQd9z6d5DMnQRieWCdbj4pBKRKRPFEXbSt8/TBP0ONcU650RqJ2NEDhEWiG0YrNXRfesALb36LBh8dgj5tUTYdeldahhAhB5B1CsXui59EpWpn2DEJJVtL7OQH4oxh49q2utmPacFyrGLUfbr8UF1aMTTUob37z91fPjxIQE2aikxpCvEqXzoD+Uo0dRrdxV5c8J0150cL8kY7nCwYtgwhesFRCnH7vQWjb/yVpAmhLQD/3IoBW1GqDGuzepNxGmc5y4Scz1flmtZ/U5y3oy0zQRqNWBBo9ohlFBBcWcKZTvARoSfn3yqfvjx4QHWI4y884QQ3pnyEC/VPAzwtXcV2YdbZojbifbrFrzKnbfX8QWnR9GLRQy3cWfKXE2LibroyUB49eNexzOE2RlCp/Dyo3UeEgrIozSNyonUjCkKlSFHiG+T9t1FkLVUpVU1zWiZL+KjU3iy7JFKOkSRSEGyXFY0UXQ2Ibx/8pmjtx0BNiGMABNiRaf40ED4HuDjRXfBWyk6OCHEOx3ciJRiJ28JdvUEBRPMxCgKFBWfTLW1ZoRXP+tVn7YlwEaETrFcoRD4I538RFSDUyxARISbOYdrokN3wdScdX1FWCbx9sby9QKlZ2WdflNG7yTK2suXRn9LjZdefeYItGFiWiJkDvBa18UCQ+jFEPjaJyUvGfa8q5aDaHPlDC0f4rU12J7f2brOmsrRiuo+DJ4EpbiyvG/0sFsI/xJ2PL16WB9xIEJBiCKJqRScgg4JuXD3Ij9/YWOmbfdicB1AW5zbZLQbILud3VmjI3jomiIyirUAEjWz10VPcVB7TQF+fv8qBhp/xXWyRVKq9gn0nPj/z1vLEONDLUFxU5m1uEwZ/fReadA4cNl2Pw3fx+hP98hYysnqzgoszq1Q5w6jF0IkCbe3qlUAvU6G0lOWp7h/9erVv/7lb72hQCAYDIQ+fHa/Mbpgn3j2t95wKBQK9/7t2cdX2SeaEJIc0fXrOpTxvz4zr7DpRrLVEfcOGbw2yAtPxez83Mr+bHUNFNQQ8AoCQHVuFfZvPy/Va+l9lMzJj//ytLfBFfc++xiFhZL6/HOS7MfPngbqP6H2PsVPNCD0Gi0uGrudcq3/jJJRmY5MzZAROg2x8Fcuwu7qCiyvzT4vEc33yuWtJZhdXJvb2S41WJr7Hz/9sGXNK/jh0798jOuzZ08/7G2pW4EPn31e7y2SCs8RiVoRJFsfrUDlJ86c261zs8LTJD6nBdZDU9xe3AW4vjy3Dz4PgOBMLs2uLG5Xl7aMwomF8Glv0JRN0N+dS2fc/hoaNYjLVSc7tf5v/rqMcAJgqszjQqo92VTXSTNkGMJ2+0tHuDd08cBCLmQ35lApl2e3kTwhQs/UytwOVPeXd543yNBE10vPKHt9+/oWfVGoBX0MhuN8Jw2k3GFTZUP1nOby+oV7U6yEqJuHgwSvh/zFQtoML9pEaNBu/57XeJirs7MbsLQCWUKIIXd2eRVuz83tXNfFJoSqPzcC1bWb02doTd/chUq6gXuo/m4kTc/XbuDa3c3CXnow0IhQ8D5Eqn3toymKDAvGySMhWqBisJigLnvDWLSzmIqPWLQbrYu0trKCP9t5zhBGs4sooNXl1TXjCLcNoasn/wJ2p0+cGB4+QQv/d+YGQuitfX2oO/UCqjfP8N+ewKewBpVYppfOiDbVnq7dLQiMeZMjFArwLmX6BO+ev3YopI3FzFQGSanZIFxGmaxVYWdjO0JFfM/U3LK0tb29xQrAdoRDyNh3bxrgrDU8fGMbYm5/IBTyd6f36CMn7J8ZHh6eXtuGF+l4U/2QiFpC9LCT1ELk3N07XVB28jkSnDuPtoVwgtthq41diEwtzs3uSLd3HjoJofOdnR24Pb+xOOVpiC2gemOapFaP8MyJ4TMP0FZVKhU0WDduNn0EPzB85uZaFupkyKOnrns6sWHSldInGECdp8YhkeZIZNr2+czfj/SiGpjHAgQtuzw7u7a6qlPaSxRfLi7D3Ozt62Zp0cp5T59plJ8lpxO4JW/efDB95sQBH8FP3Kzbh+cuM4RPziFtRGUR+UGoy8x8e/YC3Ke1de6JNeqblI0vUZvKrm1f79MYQsEJ2WwV3rEOXVoID4DHF8nutR8Ynq7zFuwUKYXAVFyTUTMpyGehBm/15u327Zxd6zF28IDNyYoRiup1USCELMIoJXyWi/oxCM+gmt44c/DvmxCiX7/CEAIV1/Ba/K+VMvvlZtoI09sYHqWywKLX6BWyQAgeBQoCk6HsgaRmPwj0IxAOVwcyadg9hAyd8sO761yGRTKgXmpV4CE/y1MZ1Yv84TciP9ZlUjYbDOSHBS+aNSdC9dVRjDcjHF7b6+1R45Ubr4PYgNDpPUdR74VzPn5shsnwIj+sJ/iQdAcMv33YFaK+v1p3sG1RN5SC+mlkog+BEO+9x5F2OTLZ6UMgFDwP711Yv6x7oEjtg4D+8YJ1zivbbTCTw5NvFlv2UALDROi12gI9rMVMazyq9mYZ7qJS0GQLeJ0QGxHi95bgfCVBrexEHs+fwhjYcNEiZU35Rjw0woxJ2WoIStEIrwMJdARRMLv3rTLwGxFOw6DDFUOb0F99jbFpQoiwIjrlhZj9xLBmyjq7LnhiRqA/fmiE1LM3acuUsuroeHFBY4C8vISAxlWLaglF/lEIh2+8CDhCYyrVrg6HEJ+pXizRwRI631m2H/544Tfi2EMjJG9IZ7oWTIRyCbqDITe7DB0G8vCjOiwd562PgA9CuNXvcoQHCGH2kAidlDehzYdWXLf3DjDiFmvH1ATNPKLVCxWtMH4bnlngJ4Cp03OT0s1pmCxG6hAedOs0l8QPbLrG6xH2OuoyUey/yNmi6KykQh1wOhvEd9RhO4UHTVJqjoIQtrq7WbV1cAClyGi+mBh1MURDuVv8Q7eIAQ8dcPvD05Uh+mKG8DXGFBGGbAiFKC+he4qSJqLNaTDgnpEgP9912PCih5M963ys4BlxONj0D3ximsAaFeQRFgyhGeMpY0SYp0fwYrqlmg4/eDHIMnFvQvhgj8JEMAamCezMGiEseuRC06ytyEAAHzpQDfBwixgNlT5Mfy8kRomqkrKHgaefZY2VtdKoqa5R3n66SRzfv9faFwzfxHAOGQjTkNchXCOCohouT9Qq70552dm1pFdpHr7hRfvcS4H+YeszaR6SZDZNJaXEloPmYOHtFX0sOaukAg5/jrZ4OOnjm4IO6LhSa60R3sBH5upnB92gtZj557KU4Q2bCPWPLt1FKdLJroTZqUBnWMxHv5nhcxUOezZolIeVKXO2Hl4gTNqV9/eg5dIEatdVYHxijDkiYwSfGJ0hvZ2oHiCbWIAC1jchPMMChbjZZ/byctc11Fi8AUkqGoor+8oFMyhVYjyUPWR9hj0VVMKKyY4wmhgPWqN9NIzVdKO2BrHRgQXjaj5GnuKt7394Db8hMEkIe+HBwdx1+gXdaybLLYCPSqIX+OH/pNHlGZ2Cd80HUGsdOtyhBDYxzN50ScxpNGwOFmRn5RCPsSSLzzGLFoKbLRHu4lYJM9d8wCdqDwKVyHhqvnPIQ9fPJxFhkd+MT4fLd+5YCKmlPX54ZhqmvdttbytFqUEsxXukJJ/IzjsaRe6kFV/JfSydMLPW8tZ38+xeCOFroosz1yfYDZgH5FmP8BWgrD6/TAkuraPi1hCqpm87zGIjrWkcci04lAumyKBADW3UMUR/KbJCiWAc+2DUorWaDj8fZfv79QiHHzBvGLeaIXWqAV/6REvwdLBcuneNZaY81s7o5Qm3ww36ZimMoVrTJdNTs2qPcZMYQf+LipMsR2lghOCMaIzW+BjHD8zsDrfw+lV0WZNsHwYOcCi0dsloq2mTD4vaJ5eooyaRYOcOhYgR8k+Zgyy82ThnYIdDyNI7g/UBvkAD6FBkEXRLZaqpR6mQR7KTtZfmZA6dMWA3nGmBoEod8THy+MFYa4fCCE2cCdmqwAiUmLEQivp5PjjqoXVfWz28OepwCNnWZW2ldo4kyOiIUGQoPL0ERfROvMlEf74z97xgWDa6wfBICwRnqui5oJ8hHD8QIQ0pJsJhzRpBzb9DWqqwKqWXdZt0dYHFy8WFDA+C20DYS22lDVFuzeyAMSVRjJRgf3aRBeC4bqVUJsTmnXjmutvRO5ZjCA8gBbgLibvigyjbrlago7FedobU6eMJ4itTlnKxo5aT7SEMN8rQJs0E2Rt+Gkl6fn1rF7JcodH6ML8Eu80yzPY44jE3IXRNtE5GDZ/ZyvMHZN8dkXPnL0/JvCzjo1b2rmvv6tbv20TYbUT4tsE0gmUxaaG7Z0JDP5nd2YDqzqphvuU+1t7irzRJaVqKO3IpFqCo/c9bmSJKcxBA/2TdEE3Rew7lV6ohvPTJlGBD2N8RQivf7UuU9XI5oTlNRgjg4cLM3p6FnTlzaiL6JxbHNOkp2pAhpOkcYbraCuHwDbaL1X7rsjwVJESKJSHJWffDi5eeQMk23q9jhDXW9nxnfvk5lMoRZuVkiUHyFteqq8vZ/TWwyEGZ+UQ1n62HOExZmnSKRU9q5norhznN80lxa4ag4OVQkEIlSnQB0ZusVCBhjxE71VILYaR4fXV+dh+ePwedLiuXyNIgH57fqEJ1aXmRiZTd1a0YERt1pB4iS07kxnkY7W6R6UBf3896jsHaZIIuGY0sOrDWS02CsibUjf47sn2IvBSkpSzMz1ehSD1tZaqTyIXs/MYazM/OLRVNzRIj/E7DsazdKyKAXsfgjPsghPh75iiCqaJ5UVQcY+oltUag1UtASZMbIsQ2vYWBsNdmaQpAh9JhdpaKpAlWukAHKcHq7PbS3OyyFboxnWJbMbx33SZFRBBG19x/AEICSCYKN6GnJkK4ZDRfUP4SHUZjEpo+ZB7q7tRbiGX0enM724uzK2sbKxiwUapGlIHGXC/tSmA/NoTukuU7XDFbDDF8k95pACn2ZoPuBoTDJ25APwvSR21hPDm/C7zhioqHEkbdLZyXydoOx7ybOQ2Nn1tbXN2F/ery3DxIHqGAJlyE5R2ArZX96/YUGJ3YZRAD/XDjjGE10VCqNoT1AM/s8uqRmrPNZRNoGs2p82xXorOAkqcxhcEeg8m820A46AjYpq6KEqwt7a6hoq7OzmWBRnEUnPK51bnqyvzsjlQ3nlUQN7miqj2wbWrqDaKsMMqOXnfb83HDww+2+P0h4bY3zCSoJPPkHR9/voVaFcFju1QEv5Cip4HDFUmHJIbQHlsgW9mew7Wzvb2ziMrp8UgUXixtwPLs7Wq0frQp9UtzrQvnoTp9gkDeqFB+KcPenGZLmA6fmIYKszEO1wzYv0dM0HjWU6T/uCOtVhpBSNofg2ZEwIcc0m5ET4664qEO+zvz8/OL+Kv9necJoYRbxre1DIsrLWYkox/Js8yJK75HXRnDw2svqGO1Z9IeQQ6z0n4qzuqbg7H6M4ACayZdp0SwVjQHpGKEo9svZ2UxDlnKZ72zdTG+kyW6t6vVbWr/mZ1donkquiCU6a+t5nijzPd46iSUA6jePLE2Q/Ol45O9JsJhxHcDLZUxsTo3UMeCBWMALUOogOE1ZJ8+BXUIzaOWh2zHYMVxdwNCmjEP+4vLt/fh9uzSS9lDwzgixaJi5N0bIaLQU0YCrCe/x6cxjYYZwqHK9Inp6RsSzOT59lEHR0CxFSQEr+bkY7CuTWnUCsktrPYQzl+4NGXn5UjaWKH7kOU11qViz7UZly3jppubm12qzi/pokjzWxLG+FbkG1Gx3tYJQqIIOb49VH9uZtShpvo5wsHJ6jZundFuY/P403CrTkPR93kog3ip670pHxo1NrEfL/8Rm2Vqf0EKOgtTHodZ7Kkgo401zNREm/Z8f/X2IixtJ0S5gLQmWeQe2atIUtnT4K/okcxkePen2p92uMZzYTa3yj82k8/1mlO4e9N7oNT5crQsn5D/efjRpfO6KBhNlzpcWe8yZ30ZiyaAmFbjUIt67jBU6y8765cgay/PsWxN1EnD2srGHkxUcOeOjG95Gj4ve8sSsGngrlG3IxjrDrHWF/+A5b1CQynIluu5Jgrt0jUiThjBAKUUklT91StspPC1u7bYSvCw4yBw+FckUcEKA72eBWfjEkSvhpGUBCUlWgJjqJGSGuwdBLfLXfQ1fdyn3IJxd9w/zhGOEbsKG+818Mdze7CQaJjTK3jhSdf6xXdEojJlGSlxmf2QhfddV+wGyepnHzskQPaPZvy2ANF+A2QRIgobk8yztB62uWgr8IOIDR93apsoYHTqwVhPaIawBUZ6VL87MzqG+tfUD0BTBq4RElQPn1SWNTaWRlRYGrFrnZ3ysqSddfO2kUM30cwaJL8AABLGSURBVBL1Rn0KSQe930iQZadWLjIOIirMkBEv8Q/ITl/T+3QEmfpw4rgPM8ERhpD122U3Ex6xFdV8yA433aXvSSZpdCnLsrH2r1OVuqnQwotBXuU+9CglP2d6tQppqyXifmFHHxS3hXBPFrxSi38kein/mup3xYjOBVMLmubxCq2nSLNMftf6RwqbhRFhE/tF4eHl9VOXLtw7V9fBRKef/DxMOORS+XOpVblbLy8bp88RBmlQajfIogcKzZ9EK4xGND/qilHVUc1vynVn+esRTtUQKpKOFluUNbSu589XGuInUUnx7sTxw/dEUVqfehs35Ra3YGWl6JAlVS/TLip1ZPwZ0GW09JBs2lvIrhBhf96VYnXV/EGv3qN/x5Oil+5FWRIBKZM3IUFS0ZSEx9nwz/qM4LCNvrZR/mB+BY0IqYEmopSVhEYW0Fdkg+JKE27jfRMJWZP6oC5XxJ+2RoqUHnflmU1o/XJBIVFg4wReXuYzaejBIDZ0OKWoT8TVKHbyhsG2tqFxIijk8L9oFIbP6cN4e8CsySjoq+i4h7Ekn7MEq1IVzV/9o8HAP4TfGnONUq3fMbHQAiEF8myMXxQ937UKy+KzebC6p/VL6xjtpgpEO8fX/DwGDsUahEFqkyffEMjFgHdHlFl0w5eClm/r0Y2VYaiPE/DuK4iwZyTYz0Yrp2813y8+hAuXmaUUpy6e4lzbW6AHeeDYfmr6avf1qwHaiDkqYDeQTV9fzDiEExoBNpSOjU/kLxHQnbRvph+sPdpmTsyOcIwGgc8E0izt3wKh4Jl6YtQFUYhSEh8tNa2Dp5Ul4Ms6+tTOUWA2wBbjndytBhlGkpMmBcTQuuSVk4DUVPBSeTFJpWLog63dmxj3vqyT4SaZu56xUG6c+FWmrxmhToeajYpFgTWti2VguVPxgHcTsONrk4fOYBgrx8leqP5Nh2zrQ8ZlIqRRwkWW4KSjwTKyrO3bj4Yxbtg9e7uuNYQj7B4LdbNsai7bmDVDd0K9sRen2AAKhTWtl/m7XYREVPN58efeSP1rFzfTKr/PdgCayShHw36irH33JA/fqZ2h5EUzQwG4qNO4qDJCO3t2GqQzZ8/uJu30apMaqHpmQoM0tt6Rk7yNec8ETUHuusJKn/idXtYBySgT2bGpd86de1hs0HwigmTDD9+YSIsFXRkaIVyPMAKqIzQJEz3dfDxMRED1KkbQ5BTY9OQqIhxegOmzZ6v2Di15gdLEiDA80Ms0ZDNSv7/kMht5ZSGko/e8KKqh3bl24cl7Ty5XdPu9sEG7LM3W5gvXJ7hHbCLflCxTc6Z7QAcoYuxfRLfhYScvYens2Z0qItyqy24k2Mtu3COBAJsRr6L/rKdLIkdoaKlGR35ZlhkleNkYrfWkvqmN1WQozJts8/whpXcwXA3s1aupuMmemN98S08SPX8kCbckoseIMAvbZ1B8a7u2/I2AIXuGmGMmFnQZZiGQrn9lhaGlPBwTPMVCEgGKtLMvG8P4ruDTtIvQKcU5oRlt85Ss0YDpyCzUqZOgzTCWG+YkBu1OsqQXiag5GcKzw2fgJmXCd3etfgnhlgGrP6WqZvpd7a9rw0P1xwD3wpTRNJOkLe6JJvSpiwbAaw10F+Ws8jcwt6mkfIQSGj5zZIS55Cx0u1SVv91N8oiaUigV0OMX6GM6nD376AwRngePboD5Dwsm58gjobH6JBFiXYlZv4tiMo4Ua0avDj5AYyzmJXaC2742c9zdt/86Sze3psb5Q/uzg1Q6w0WYEFjvAmUa0JNR7ujEWbIxtBurBllAs2EAxOgJH1y/SUBCsU0bQvy3733CG4BplFhSQR+hebTSvQuUF75w72GDf6F0PnP3+XYBksVkaUj3VoPTN+d/oCKZpUyBV/ZFX7E6/OjRNMCNRw+SxjP3SbEQPz3pGsfHPpG3tk28PtNaMAc9y8gbfMaLzfGn5y9fPt9UdpKVURevkbU/R5i/8VN1uBpcIpIqQ4d4RU0Q6P0yToxwkMT5pmB7enobdpfMt/uI+sCMcQYyTNrKXb5xytj+vj1fUjda4nXOBA0oEeXly7K3kdaIlDPIt+3u+Rqa5Ns4vdn47ZGEXtCNDIsQSZSmcMeUShIUo7LH6A5LmgdqvGhG/X4mt0E6V+7nh8t7czm3u9/eCpEwT2omoM7M0kD0JtomRpkng3bPHvLFejBTLjRYjWn7WpZbFJUiDJ+Y3jX0VhcFhtFSKjE6Zp0cZSXusC3jEK7U9jhKjhftyRG2Cgbr7+BWzjhL0tELV5mao3HPbbXm95RGoyrVjUeP0MGjCywVQYoKsqzZOOktyxKo/ZMOOgRbq9Yiv7e6uzxUABVoCBzosk9TFM138Auk0Cyp/MRTvrN3yRtf4d9rVXtxil6tgP79xO4WWpcHSGMevGQpVA/l+q0Wh1oXfTBFObnguC3z12N5FGoJ0qJRpUxEPjEFH52vTOlaY9bCWlS9zxgC6GQxcobBUn+rkNxbvoUCzD4YvkHHYm/C2qNHWY0iuqKiF61TDFpNKfkRZjVtOz4/OGCMExCi1htpJQ2J2rX19VNPPoGXUa8sNyuQ4Bkw3kLe6bud+XEUajRrlXPTkHLv3rjRZ2zBvgdnH5ScskeX+LkvvlcTNVvXzW1Mt836hWM0jUkQNJR9MVkqFHQdhWhkt7u67lz+BEq63nRtSgTzx9/JoC+23IYiuLMtkt8i0u2bZ8/sLty8cYM9f6kq0SNn/lKP+ujwl1Cu4UlxAjlkmzHuSm3KYiSKlEhKeHxeBCvKniSYY6GRylxo8f5PURsJsRRDh+PKaQVIiOMB3EJKK2MjJqEK1WGkMWcfcB3TFaWcpOZMGuoWdcri5oj1ZYZv9g+4a1Mj+iVFp8N+BY9gvqFO9ExdtBDazhrWdNS5lTNE2ImrMBZrocZd7X/R0thQuDRNAKeLW9u7yNaSkpREUyN7ynTfUFCkCZqFERrM9acGuGE3XiOVz/T4gwHGbpN6xJ5sEj1w2WCjpy5CU40ASdWA+e7qzl7qzFfK8Dm5VnrKvPMDkuDC6vDw2TXQfR4PqyQJoi9aZtQn7XcTiZ0ZHTOPtaRj8XiPm14XPZafhFJCayQssjZ1/g5q6vqd81OJJt3hhx4Y4WojEdy8+PAIBx21amm5ddhaurELw4/OPhruQ1ZS89P4J08ZaMziiHswHHSlzEJ0nCUy1GDA301h9gIN1GoA4XnI2ejDFpojL0yoDj/xrU7eEmRbbkNPw3st3/grslTp7qOzZ4e362yC4PSVJRgZdRu3MWSxjwD0uHDx5x/unhhDltbwJldB1srIRrUWmVJB2wsbjLSjt5PUFivPTbJjZ60KUYIzgcq4Pb06fR1qUkY2nijAQH+cM7bgF99++ZuaUT33969evXr1g/lXf3yCeEI9S2vJRp1MR7sNttW5ITUWi6MpIOjfam6co2t6FWZHk1pNAhE9CyNxa0jSq+9PP/6f2vm53P+cPn368df0R/4JNYyWcbOxDaDlEpQZc+xox77QWmy8AmXsUgutmaIokoEx7w/J6i2Ipdlec33x9StC+Pj0P2xvKfTDPxDhN4juu6+++vpbPnKoZxxued74KlMxsRd0qOzNIh2956l+qWyeUg6pburAophVDUR8CxCL0zG97779+qvHjx/jN3z9+J9/P1ez7MHY3/95+vQ3LkKIH/j+FRNnMB7j3bmvk6CvEjd1tKP3yzQs5vfJRPfutTaotTuQEd/MEGsS/vL7x49JGxHZl4//+X/tc+NygAhf4Q++OE3r8VcGctQW5UCyzdZW2qipdPaap6bFJ/mgmgUmldc8ZJRfH+Tx2arfod59+5jf/pf0x3/WBQGDU//45+NX+Bx+YJ9hWzLww3f43/QeaK8JDBdos/DzZUeno2zF2cvokcf7Rw6UoiB6dBgfot319ekvSAM5wm9QVI//UVc9caX+3zdff+lCOXOE3+LPvvzX6S+/wEhtAsqRAy4hl2MBh/Faxw6jpubFvGKMIKLnb/2MvRjtuykh/iVuLrxn9ZWhgmgavnPXe+fcTJhmmLleMYTfk1XC5/H49KtvVdU9UGzJEJ1ygngfH/3b3uvi3wyRbjM0s9naafgk8niub79/TIJDJfrhX7gRv3r1JSvF1PcSuHgaV/3261enH7MPf/sv9jhOf0eXamlveFbSmDt7VK7QvhgRpO7QcGqhNcQEjQr4hu8+utPgV19/+e13tF/U8GhDVrN/Jtc9RHQg+MWX33ypOtSvH5ubttc2OtAuwehk3LQI0NvqDjtdLgZxxE8sJ9tqpwjevrzq+NqwL8RY+Og9VzyTH2ks0zIaMZPP/Irwk1H9nv8z/GOqJceXNdp6vNWo/Tz+G1bO2uJpKdpiMwoeasH53rIvdPNhd4qanxTGIVW+2G/c4NWUzSxAvoc07lvuWX6gfdYqn4AKMmgVS46OzBwAEW/xVwNKC/ohL4wEHWQeH7/6lpQzRDXGTYqOnH2jcXcul8GVy+XcPfHB7j1FFgVEuQAjmSGH+sU3tGmDjuD4QotnJypjcXOwsdFBfixL5TP8KCoLV7ZaaGoElfGL0//6iuELZ0bozc8sYeOzRn8bqzJTkfgEPadHQUHGEeOrf/3Q2swIwibZuAA/LD929GbUtlhYxkqSaqaSaO58SqDP/IG8G732QqoFfl4t4vMKsryQdvWAz+n1RbSEnjAFJCCRhW6X44tgSzMjRPqovYEdv+44QfrGNcgI3Ay5b//MQtMZD18fa21R43lYiNrbRjlvlQsj6Rj1NwuCYO+ZFilvN07q38LMCBpkaN7GAAfY0csefswKsbTGAJnG0ATr47UvkR0E7h1lPcTN2sZfAa21siSC5xaMhv1NeSdq1KfTCnEuwaMmay1XmmnqDOvXjhUbWKR8axzxZVsF57QbJ9Gm5FshZKQ9W3cyxgDOpKYab80ZPdY9aK248dYFVJ2ge0CpszhUdpASja0kxu+i5BVdE60RUpVAker1XvQp7DhGmL9qEtLHQWVarQCHmKKYNhSjE162uyoXWjIeJ7NDcUJ4cM+qUNcRJIhRGCdV6R6B4yKjB64evism6JkO5iFq0y3xwPgO5ctk2JwBrX3E9kdBy46w8QPGvJGZowx537x6uW8aIR1Se2JbmvD60JgvZSCTSx8cf9mhCtrmnpvsZo8hwFSHNZhDr6DxPimmqviXhdbGpX7JzJa+RoYmPjmyABOEr9cQIKSP3Us0r4BxcXa4yZUb2Wo+V9ACYTreugRiF5+gbe2lKa1jDsSB2NHkfg+9hozGqBwFM+Hc2MKbdFWkCfE9LXvHLXyiM7qwlyNEIfcM//6B3E8gQL5cRn/bTH+Q3RFsRRsT9I0IQw736xDKToX7ISTBMVOAb3sH1q1gZsDYJ3QbLryrxEHOggTEEB7QFUCWNHJrIEWZHvxek6On3q4JbbEG+WuRYZIdxAv0jB/k8GmHMYR9LRFSIWALcoNsMkbOMKBorN+Wk3/NUg3SDyPMPQaHADlAK8NKLYpgfy+P/XdyZBMGeljW2D8xYwrw54CPrUFjzBnk2RsfBvOVzUgT8WYN1DCTGSg0n+HwRqWZCdbHEIyb6GC85y1ymDctV9zsN+0fJA4wNApKYzEpwnR5lI4sNOCLJCDmZvNC/BlLfKnun4v8jOUaMu5skvvHcAw2vXVQWDuYWx1qOLEt+1A9BxmaeH7MxDfj/5nhYytu6upYnG4v3L+3WZOjoBncuW66tOD0LOz1M/GFa53VI+mf1D+8ZqndeUvFyGb40xXFY8TI7ORQv+pQx2yVD8Gz+SJDIg8OpS18KffPFR8t19Ck6aa7aT+GxkHhPIfNQgs4XP21kxaicxPylFNV4+MWvlj8bUTxHa3BUfNmqYjh8I9CwnjLZpHsTLZWaEzABEkraFPPiZ+z+GorbmKM9RCf7B6/xbajGFH0TYvxiJGFcUouh9wjFr6ftXrWLdegedcxAoFCUvihTKeVnpKj0E/5l24L36T7KNp/3t6ydHWEaCbGy3UFM0HY3KPwfcjClzquUsTxrZpdpbMkLnfd5BnfAkXstQ04E/85er83LpfJv0ZIPkOSFTQJ3iz1UVjHbiD3y9JP21JNK5JHiYXyW+bsdpY06zHxjf5k4e1RrLARWsWGqHLEK6verbSrdjZsvJPX+f4cljpoUM1uKghQ3CRsstcjmAL82fv3H7EynOZkVIcrvynINIxftYn232ENck6Woa7EqLbXa5ZaYfwX4+HftFwpU1HjrAZvBFqjv1gT2mLx9HHcoabHzVdHHmM1/idZzDfGgo5AiB+E/7cDaEDMWH+iVsd/t8VaANC5h1iC9ZdHQ3/EGuKqyezoYd+38QtZGTr+zhqY23iJ2C9ikZ8fJ13t4G3oP/MVNoj4T1QqexsrB5ZF/XddjMr8+/kJ23K3N/HoF7SC42/bE/5/nQCNNeZuZFEAAAAASUVORK5CYII=" style="width: 100px; height:auto;">
                </td>
                <td>
                    <center>
                        <h4 style="margin: 0px; font-family:Arial;font-size:16pt;color:#000">PEMERINTAH KOTA MADIUN</h4>
                        <h5 style="margin: 0px;font-family:Arial;font-size:12pt;">
                            KECAMATAN MANGUHARJO<br />
                            <b>KELURAHAN NAMBANGAN LOR</b>
                        </h5>
                        <div style="width:90%">
                            <h6 style="margin: 0px; font-size:9pt;font-family:Arial;">Jl. Merpati No. 75, Kota Madiun, 63129, Indonesia</h6>
                            <h6 style="margin: 0px; font-size:9pt;font-family:Arial;">Telp.: 493137</h6>
                            <h6 style="margin: 0px; font-size:9pt;font-family:Arial;">https://madiunkota.go.id</h6>
                        </div>
                    </center>
                </td>
            </tr>
        </table>
        <hr style="margin:0px;color:#000;border-style:solid none none;border-width:4px 0 0;" /><br>
    </div>
    <div class="content-print">
        <div class="col-md-12">
            <center><u><b><span style="font-size:16pt; margin:14px">SURAT KETERANGAN</span></b></u></center>
            <div style="margin:6px">

            </div>
            <center><span style="font-size:12pt; margin:14px"><b>NOMOR</b> : {{$data->reference_number}}</span></center><br><br>

            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">1. Yang bertanda tangan di bawah ini:</p>
            <div style="margin-left: 20px; font-family:Arial;font-size:12pt;color:#000">
                <table style="margin-top: 12px; font-size:14px">
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">a. &nbsp;Nama </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">&nbsp; &nbsp;&nbsp; &nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$data->sign_name}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">b. &nbsp;Jabatan </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">&nbsp; &nbsp;&nbsp; &nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$data->sign_position}}</p>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            @php
            $a = 'a';
            @endphp
            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">2. Dengan ini menerangkan :</p>
            <div style="margin-left: 20px; font-family:Arial;font-size:12pt;color:#000">
                <table style="margin-top: 12px; font-size:14px">
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$a++}}. &nbsp;Nama </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">&nbsp; &nbsp;&nbsp; &nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$data->explain_name}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$a++}}. &nbsp;NIK </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">&nbsp; &nbsp;&nbsp; &nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$data->explain_nik}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$a++}}. &nbsp;Alamat </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">&nbsp; &nbsp;&nbsp; &nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$data->explain_address}}</p>
                        </td>
                    </tr>
                    @if($data->explain_place_and_date_of_birth!=null)
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$a++}}. &nbsp;Tempat, Tanggal Lahir </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">&nbsp; &nbsp;&nbsp; &nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$data->explain_place_and_date_of_birth}}</p>
                        </td>
                    </tr>
                    @endif

                    <!-- <tr>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">c. &nbsp;Kebangsaan</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">&nbsp; &nbsp;&nbsp; &nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$data->explain_country}}</p>
                        </td>
                    </tr> -->

                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$a++}}. &nbsp;Agama </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">&nbsp; &nbsp;&nbsp; &nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$data->explain_religion}}</p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$a++}}. &nbsp;Status Perkawinan </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">&nbsp; &nbsp;&nbsp; &nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$data->explain_martial_status}}</p>
                        </td>
                    </tr>

                    @if($data->explain_job!=null)
                    <tr>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$a++}}. &nbsp;Pekerjaan </p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">&nbsp; &nbsp;&nbsp; &nbsp;:</p>
                        </td>
                        <td>
                            <p style="margin: 0px; font-family:Arial;font-size:12pt;color:#000">{{$data->explain_job}}</p>
                        </td>
                    </tr>
                    @endif
                </table>
            </div>
            <br><br>


            @foreach($description as $desc)
            <dd style="margin: 12px; font-family:Arial;font-size:12pt;color:#000;text-indent: 0.5in;">
                {{$desc}}
            </dd>
            @endforeach

        </div>
        <div class="col-md-12">
            <table class="pull-right" style="margin-top: 20px; font-size:12pt; font-family:Arial; text-align:center;">
                <tr>
                    <td>
                        Madiun, {{$data->formatted_letter_date2}}<br>
                        @if($data->sign == 1)
                        <b>LURAH NAMBANGAN LOR</b>
                        @else
                        <b>a.n. LURAH NAMBANGAN LOR</b><br>Sekretaris
                        @endif<br /><br /><br /><br /><br /><br />
                        <b style="text-transform: uppercase;"><u>{{$data->sign_name}}</u></b> <br> {{$data->sign_rank}}<br />NIP. {{$data->sign_id}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="hide-from-print" style="border-top:solid 1px #ddd;padding:5px;"></div>
    <div class="page-break"></div>


</body>

</html>