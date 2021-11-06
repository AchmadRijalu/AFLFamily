<nav class="navbar navbar-light">

        <a href="/"><img src="{{url::asset('img/FamsCard.png') }} " alt="" width="100" class="logo"></a  >
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link text-primary {{($title === "Data Warga")?'text-light active bg-primary' : ''}}" aria-current="page" href="/anggota">Member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary {{($title === "Data Kartu Keluarga")?' active bg-primary text-light' : ''}}" href="/kartu">Fams Card</a>
            </li>

          </ul>

  </nav>


