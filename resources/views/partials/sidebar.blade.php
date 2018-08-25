<div id="cssmenu" class="h-100">
  <ul>
     <li class="active"><a href="/home/"><i class="fa fa-fw fa-home"></i> Home</a></li>
     <li class="has-sub {{ Request::is('missions/*') ? 'active open' : null }}"><a><i class="fa fa-fw fa-bars"></i> Missions</a>
        <ul style="">
           <li class="{{ Request::is('missions/noob') ? 'active' : null }}"><a href="/missions/noob/"><i class="fa fa-fw fa-reddit-alien"></i> Noob</a></li>
           <li class="{{ Request::is('missions/basic') ? 'active' : null }}"><a href="/missions/basic/"><i class="fa fa-fw fa-usb"></i> Basic</a></li>
           <li class="{{ Request::is('missions/realistic') ? 'active' : null }}"><a href="/missions/realistic/"><i class="fa fa-fw fa-wifi"></i> Realistic</a></li>
           <li class="{{ Request::is('missions/application') ? 'active' : null }}"><a href="/missions/application/"><i class="fa fa-fw fa-android"></i> Application</a></li>
           <li class="{{ Request::is('missions/crypto') ? 'active' : null }}"><a href="/missions/crypto/"><i class="fa fa-fw fa-hashtag"></i> Crypto</a></li>
           <li class="{{ Request::is('missions/patching') ? 'active' : null }}"><a href="/missions/patching/"><i class="fa fa-fw fa-file-code-o"></i> Patching</a></li>
           <li class="{{ Request::is('missions/cracking') ? 'active' : null }}"><a href="/missions/cracking/"><i class="fa fa-fw fa-windows"></i> Cracking</a></li>
           <li class="{{ Request::is('missions/javascript') ? 'active' : null }}"><a href="/missions/javascript/"><i class="fa fa-fw fa-edge"></i> Javascript</a></li>
           <li class="{{ Request::is('missions/programming') ? 'active' : null }}"><a href="/missions/programming/"><i class="fa fa-fw fa-git"></i> Programming</a></li>
        </ul>
     </li>
     <li class="has-sub {{ Request::is('library/*') ? 'open active' : null }}"><a href="#"><i class="fa fa-fw fa-leanpub"></i> Library</a>
        <ul style="">
           <li class="{{ Request::is('library/articles') ? 'active' : null }}"><a href="/library/articles/"><i class="fa fa-fw fa-file-text-o"></i> Articles</a></li>
           <li class="{{ Request::is('library/e-books') ? 'active' : null }}"><a href="/library/e-books"><i class="fa fa-fw fa-leanpub"></i> E-Books</a></li>
           <li class="has-sub {{ Request::is('library/files/*') ? 'open active' : null }}"><a href="#"><i class="fa fa-fw fa-files-o"></i> Files</a>
              <ul style="">
                 <li class="{{ Request::is('library/files/docx') ? 'active' : null }}"><a href="/library/files/docx/"><i class="fa fa-fw fa-file-word-o"></i> DOCX</a></li>
                 <li class="{{ Request::is('library/files/epub') ? 'active' : null }}"><a href="/library/files/epub/"><i class="fa fa-fw fa-file"></i> EPUB</a></li>
                 <li class="{{ Request::is('library/files/pdf') ? 'active' : null }}"><a href="/library/files/pdf/"><i class="fa fa-fw fa-file-pdf-o"></i> PDF</a></li>
                 <li class="{{ Request::is('library/files/rar') ? 'active' : null }}"><a href="/library/files/rar/"><i class="fa fa-fw fa-file-text"></i> RAR</a></li>
                 <li class="{{ Request::is('library/files/zip') ? 'active' : null }}"><a href="/library/files/zip/"><i class="fa fa-fw fa-file"></i> ZIP</a></li>
              </ul>
           </li>
           <li class="{{ Request::is('library/manuals') ? 'active' : null }}"><a href="/library/manuals/"><i class="fa fa-fw fa-file-powerpoint-o"></i> Manuals</a></li>
           <li class="{{ Request::is('library/tools') ? 'active' : null }}"><a href="/library/tools/"><i class="fa fa-fw fa-line-chart"></i> Tools</a></li>
           <li class="{{ Request::is('library/tutorials') ? 'active' : null }}"><a href="/library/tutorials/"><i class="fa fa-fw fa-file-video-o"></i> Tutorials</a></li>
        </ul>
     </li>
     <li class="has-sub {{ Request::is('users/*') ? 'open active' : null }}"><a href="#"><i class="fa fa-fw fa-users"></i> Members</a>
        <ul style="">
           <li class="{{ Request::is('users/all') ? 'active' : null }}"><a href="/users/"><i class="fa fa-fw fa-users"></i> View Users</a></li>
           <li class="{{ Request::is('users/online') ? 'active' : null }}"><a href="/users/online/"><i class="fa fa-fw fa-user-plus"></i> Users Online</a></li>
           <li class="{{ Request::is('users/stats') ? 'active' : null }}"><a href="/leaderboards/"><i class="fa fa-fw fa-bar-chart-o"></i> Leaderboards</a></li>
           <li class="{{ Request::is('users/hof') ? 'active' : null }}"><a href="/hof/"><i class="fa fa-fw fa-thumbs-o-up"></i> Hall Of Fame</a></li>
           <li class="{{ Request::is('users/hos') ? 'active' : null }}"><a href="/hos/"><i class="fa fa-fw fa-thumbs-down"></i> Hall Of Shame</a></li>
        </ul>
     </li>
     <li class="{{ Request::is('faq') ? 'active' : null }}"><a href="/faq/"><i class="fa fa-fw fa-question-circle"></i> FAQ</a></li>
     <li class="{{ Request::is('help') ? 'active' : null }}"><a href="/help/"><i class="fa fa-fw fa-heartbeat"></i> Support</a></li>
     <li class="{{ Request::is('contactus') ? 'active' : null }}"><a href="/contactus/"><i class="fa fa-fw fa-phone"></i> Contact Us</a></li>
  </ul>
</div>

@section('footer_scripts')
  @include('scripts.cssmenu')
@endsection