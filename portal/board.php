<?php
include "inc/conf.php";
include "inc/initial.php";
include ($skrupel_path."inc.conf.php");
$file=$skrupel_path."lang/de/lang.kommunikation_board.php";
require ($file);
if (@file_exists($skrupel_path.'extend/bbc/bbc.php'))
{ require ($skrupel_path."extend/bbc/bbc.php"); }
$bildpfad=$skrupel_path."bilder";
$page_name="Forum";

if (!$_GET["fu"] || $_GET["fu"]=="")
{ $_GET["fu"]=1; }

if ($_GET["fu"]==1) {
require_once ("inc/_header.php");
    ?>
        <div id="bodybody" class="flexcroll" onfocus="this.blur()">
        <table border="0" width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td class="forumdunkel" width="100%" colspan="2"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
                <td class="forumdunkel"><nobr>&nbsp;<?php echo $lang['kommunikationboard']['themen']; ?>&nbsp;</nobr></td>
                <td class="forumdunkel"><nobr>&nbsp;<?php echo $lang['kommunikationboard']['beitraege']; ?>&nbsp;</nobr></td>
                <td class="forumdunkel"><nobr>&nbsp;<?php echo $lang['kommunikationboard']['letzterbeitrag']; ?>&nbsp;</nobr></td>
            </tr>
            <tr>
                <td colspan="5" class="forumdunkel">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td style="font-size:14px;"><b><?php echo $lang['kommunikationboard']['gotteswort']; ?></b></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="forummittel"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
                <td class="forumhell" width="100%">
    
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td>
                                <a href="board.php?fu=2&fo=1">
                                    <b><?php echo $lang['kommunikationboard']['offenbarungen']; ?></b>
                                </a>
                            </td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><?php echo $lang['kommunikationboard']['kommentiertoff']; ?></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                    </table>
                    <?php
                    $themaanzahl=0;
                    $zeiger = @mysql_query("SELECT count(*) as anzahl FROM $skrupel_forum_thema where forum=1");
                    $array = @mysql_fetch_array($zeiger);
                    $themaanzahl=$array["anzahl"];
                    $beitraganzahl=0;
                    $zeiger = @mysql_query("SELECT count(*) as anzahl FROM $skrupel_forum_beitrag where forum=1");
                    $array = @mysql_fetch_array($zeiger);
                    $beitraganzahl=$array["anzahl"];
                    $zeiger = @mysql_query("SELECT * FROM $skrupel_forum_beitrag where forum=1 order by datum desc limit 0,1");
                    $array = @mysql_fetch_array($zeiger);
                    $letzter=$array["datum"];
                    if ($letzter>=1) { $letzter=date('d.m.y G:i',$letzter); } else { $letzter=""; }
                    ?>
                </td>
                <td class="forummittel"><center><nobr>&nbsp;<?php echo $themaanzahl; ?>&nbsp;</nobr></center></td>
                <td class="forumhell"><center><nobr>&nbsp;<?php echo $beitraganzahl; ?>&nbsp;</nobr></center></td>
                <td class="forummittel"><nobr>&nbsp;<?php echo $letzter; ?>&nbsp;</nobr></td>
            </tr>
            <tr>
                <td colspan="5" class="forumdunkel">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td style="font-size:14px;"><b><?php echo $lang['kommunikationboard']['hastduskrupel']; ?></b></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="forummittel"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
                <td class="forumhell" width="100%">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td>
                                <a href="board.php?fu=2&fo=2">
                                    <b><?php echo $lang['kommunikationboard']['smalltalk']; ?></b>
                                </a>
                            </td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><?php echo $lang['kommunikationboard']['hallo']; ?></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                    </table>
                    <?php
                    $themaanzahl=0;
                    $zeiger = @mysql_query("SELECT count(*) as anzahl FROM $skrupel_forum_thema where forum=2");
                    $array = @mysql_fetch_array($zeiger);
                    $themaanzahl=$array["anzahl"];
                    $beitraganzahl=0;
                    $zeiger = @mysql_query("SELECT count(*) as anzahl FROM $skrupel_forum_beitrag where forum=2");
                    $array = @mysql_fetch_array($zeiger);
                    $beitraganzahl=$array["anzahl"];
                    $zeiger = @mysql_query("SELECT * FROM $skrupel_forum_beitrag where forum=2 order by datum desc limit 0,1");
                    $array = @mysql_fetch_array($zeiger);
                    $letzter=$array["datum"];
                    if ($letzter>=1) { $letzter=date('d.m.y G:i',$letzter); } else { $letzter=""; }
                    ?>
                </td>
                <td class="forummittel"><center><nobr>&nbsp;<?php echo $themaanzahl; ?>&nbsp;</nobr></center></td>
                <td class="forumhell"><center><nobr>&nbsp;<?php echo $beitraganzahl; ?>&nbsp;</nobr></center></td>
                <td class="forummittel"><nobr>&nbsp;<?php echo $letzter; ?>&nbsp;</nobr></td>
            </tr>
            <tr>
                <td class="forummittel"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
                <td class="forumhell" width="100%">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td>
                                <a href="board.php?fu=2&fo=3">
                                    <b><?php echo $lang['kommunikationboard']['handel']; ?></b>
                                </a>
                            </td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><?php echo $lang['kommunikationboard']['handeltext']; ?></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                    </table>
                    <?php
                    $themaanzahl=0;
                    $zeiger = @mysql_query("SELECT count(*) as anzahl FROM $skrupel_forum_thema where forum=3");
                    $array = @mysql_fetch_array($zeiger);
                    $themaanzahl=$array["anzahl"];
                    $beitraganzahl=0;
                    $zeiger = @mysql_query("SELECT count(*) as anzahl FROM $skrupel_forum_beitrag where forum=3");
                    $array = @mysql_fetch_array($zeiger);
                    $beitraganzahl=$array["anzahl"];
                    $zeiger = @mysql_query("SELECT * FROM $skrupel_forum_beitrag where forum=3 order by datum desc limit 0,1");
                    $array = @mysql_fetch_array($zeiger);
                    $letzter=$array["datum"];
                    if ($letzter>=1) { $letzter=date('d.m.y G:i',$letzter); } else { $letzter=""; }
                    ?>
                </td>
                <td class="forummittel"><center><nobr>&nbsp;<?php echo $themaanzahl; ?>&nbsp;</nobr></center></td>
                <td class="forumhell"><center><nobr>&nbsp;<?php echo $beitraganzahl; ?>&nbsp;</nobr></center></td>
                <td class="forummittel"><nobr>&nbsp;<?php echo $letzter; ?>&nbsp;</nobr></td>
            </tr>
            <tr>
                <td class="forummittel"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
                <td class="forumhell" width="100%">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td>
                                <a href="board.php?fu=2&fo=4">
                                    <b><?php echo $lang['kommunikationboard']['strategie']; ?></b>
                                </a>
                            </td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><?php echo $lang['kommunikationboard']['strategietext']; ?></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                    </table>
                    <?php
                    $themaanzahl=0;
                    $zeiger = @mysql_query("SELECT count(*) as anzahl FROM $skrupel_forum_thema where forum=4");
                    $array = @mysql_fetch_array($zeiger);
                    $themaanzahl=$array["anzahl"];
                    $beitraganzahl=0;
                    $zeiger = @mysql_query("SELECT count(*) as anzahl FROM $skrupel_forum_beitrag where forum=4");
                    $array = @mysql_fetch_array($zeiger);
                    $beitraganzahl=$array["anzahl"];
                    $zeiger = @mysql_query("SELECT * FROM $skrupel_forum_beitrag where forum=4 order by datum desc limit 0,1");
                    $array = @mysql_fetch_array($zeiger);
                    $letzter=$array["datum"];
                    if ($letzter>=1) { $letzter=date('d.m.y G:i',$letzter); } else { $letzter=""; }
                    ?>
                </td>
                <td class="forummittel"><center><nobr>&nbsp;<?php echo $themaanzahl; ?>&nbsp;</nobr></center></td>
                <td class="forumhell"><center><nobr>&nbsp;<?php echo $beitraganzahl; ?>&nbsp;</nobr></center></td>
                <td class="forummittel"><nobr>&nbsp;<?php echo $letzter; ?>&nbsp;</nobr></td>
            </tr>
            <tr>
                <td colspan="5" class="forumdunkel">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td style="font-size:14px;"><b><?php echo $lang['kommunikationboard']['interfacebezogenes']; ?></b></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="forummittel"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
                <td class="forumhell" width="100%">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td>
                                <a href="board.php?fu=2&fo=5">
                                    <b><?php echo $lang['kommunikationboard']['howtos']; ?></b>
                                </a>
                            </td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><?php echo $lang['kommunikationboard']['howtostext']; ?></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                    </table>
                    <?php
                    $themaanzahl=0;
                    $zeiger = @mysql_query("SELECT count(*) as anzahl FROM $skrupel_forum_thema where forum=5");
                    $array = @mysql_fetch_array($zeiger);
                    $themaanzahl=$array["anzahl"];
                    $beitraganzahl=0;
                    $zeiger = @mysql_query("SELECT count(*) as anzahl FROM $skrupel_forum_beitrag where forum=5");
                    $array = @mysql_fetch_array($zeiger);
                    $beitraganzahl=$array["anzahl"];
                    $zeiger = @mysql_query("SELECT * FROM $skrupel_forum_beitrag where forum=5 order by datum desc limit 0,1");
                    $array = @mysql_fetch_array($zeiger);
                    $letzter=$array["datum"];
                    if ($letzter>=1) { $letzter=date('d.m.y G:i',$letzter); } else { $letzter=""; }
                    ?>
                </td>
                <td class="forummittel"><center><nobr>&nbsp;<?php echo $themaanzahl; ?>&nbsp;</nobr></center></td>
                <td class="forumhell"><center><nobr>&nbsp;<?php echo $beitraganzahl; ?>&nbsp;</nobr></center></td>
                <td class="forummittel"><nobr>&nbsp;<?php echo $letzterv; ?>&nbsp;</nobr></td>
            </tr>
            <tr>
                <td class="forummittel"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
                <td class="forumhell" width="100%">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td>
                                <a href="board.php?fu=2&fo=6">
                                    <b><?php echo $lang['kommunikationboard']['zahlentechnisches']; ?></b>
                                </a>
                            </td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><?php echo $lang['kommunikationboard']['zahlentext']; ?></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                    </table>
                    <?php
                    $themaanzahl=0;
                    $zeiger = @mysql_query("SELECT count(*) as anzahl FROM $skrupel_forum_thema where forum=6");
                    $array = @mysql_fetch_array($zeiger);
                    $themaanzahl=$array["anzahl"];
                    $beitraganzahl=0;
                    $zeiger = @mysql_query("SELECT count(*) as anzahl FROM $skrupel_forum_beitrag where forum=6");
                    $array = @mysql_fetch_array($zeiger);
                    $beitraganzahl=$array["anzahl"];
                    $zeiger = @mysql_query("SELECT * FROM $skrupel_forum_beitrag where forum=6 order by datum desc limit 0,1");
                    $array = @mysql_fetch_array($zeiger);
                    $letzter=$array["datum"];
                    if ($letzter>=1) { $letzter=date('d.m.y G:i',$letzter); } else { $letzter=""; }
                    ?>
                </td>
                <td class="forummittel"><center><nobr>&nbsp;<?php echo $themaanzahl; ?>&nbsp;</nobr></center></td>
                <td class="forumhell"><center><nobr>&nbsp;<?php echo $beitraganzahl; ?>&nbsp;</nobr></center></td>
                <td class="forummittel"><nobr>&nbsp;<?php echo $letzter; ?>&nbsp;</nobr></td>
            </tr>
        </table>
        </div>
        <?php
}
if ($_GET["fu"]==2) {
require_once ("inc/_header.php");
    $forum=$_GET["fo"];

    ?>
        <script language=JavaScript>

            function checkeingabe(e) {

                if (document.formular.thema.value=="") { alert('<?php echo $lang['kommunikationboard']['themaeingeben']; ?>'); return false;}
                else if (document.formular.beitrag.value=="") { alert('<?php echo $lang['kommunikationboard']['beitrageingeben']; ?>'); return false;}

                return true;
            }
        </script>
        <div id="bodybody" class="flexcroll" onfocus="this.blur()">
        <table border="0" width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td class="forumdunkel" width="100%" colspan="5">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td>
                                <a href="board.php?fu=1">
                                    &lt&lt&lt <?php echo $lang['kommunikationboard']['uebersicht']; ?>
                                </a>
                            </td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="forumdunkel"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
                <td class="forumdunkel" width="100%"><center><nobr>&nbsp;<?php echo $lang['kommunikationboard']['themen']; ?>&nbsp;</nobr></center></td>
                <td class="forumdunkel"><center><nobr>&nbsp;<?php echo $lang['kommunikationboard']['begonnenvon']; ?>&nbsp;</nobr></center></td>
                <td class="forumdunkel"><center><nobr>&nbsp;<?php echo $lang['kommunikationboard']['antworten']; ?>&nbsp;</nobr></center></td>
                <td class="forumdunkel"><center><nobr>&nbsp;<?php echo $lang['kommunikationboard']['letzterbeitrag']; ?>&nbsp;</nobr></center></td>
            </tr>
            <?php
            $zeiger = @mysql_query("SELECT * FROM $skrupel_forum_thema where forum=$forum order by letzter desc limit 0,20");
            $themaanzahl = @mysql_num_rows($zeiger);

            if ($themaanzahl>=1) {

                for ($i=0; $i<$themaanzahl;$i++) {
                    $ok = @mysql_data_seek($zeiger,$i);
                
                    $array = @mysql_fetch_array($zeiger);
                    $id=$array["id"];
                    $icon=$array["icon"];
                    $thema=$array["thema"];
                    $beginner=$array["beginner"];
                    $antworten=$array["antworten"];
                    $letzter=$array["letzter"];
                
                    $letzter=date('d.m.y G:i',$letzter);

                    ?>
                    <tr>
                        <td class="forummittel"><center><img src="<?php echo $skrupel_path; ?>bilder/forum_icons/<?php echo $icon; ?>.gif" border="0" width="15" height="15"></center></td>
                        <td class="forumhell" width="100%">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><a href="board.php?fu=3&fo=<?php echo $forum; ?>&thema=<?php echo $id; ?>"><?php echo $thema; ?></a></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                            </table>
                        </td>
                        <td class="forummittel">
                            <center>
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                        <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                        <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    </tr>
                                    <tr>
                                        <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                        <td><nobr><?php echo $beginner; ?></nobr></td>
                                        <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    </tr>
                                    <tr>
                                        <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                        <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                        <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    </tr>
                                </table>
                            </center>
                        </td>
                        <td class="forumhell"><center><nobr>&nbsp;<?php echo $antworten; ?>&nbsp;</nobr></center></td>
                        <td class="forummittel">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><nobr><?php echo $letzter; ?></nobr></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td class="forummittel" colspan="5">
                        <center>
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><?php echo $lang['kommunikationboard']['keinebeitraegevorhanden']; ?></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                            </table>
                        </center>
                    </td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <td class="forumdunkel" colspan="5"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
            </tr>
            <?php
            if ($forum>1) {
                ?>
                <tr>
                    <td class="forumdunkel"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
                    <td class="forummittel" colspan="4">
                        <center>
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                               <?php if ($_SESSION["user_id"]){?> <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><form name="formular" method="post" action="board.php?fu=4&forum=<?php echo $forum; ?>" onSubmit="return checkeingabe();"></td>
                                    <td><center><?php echo $lang['kommunikationboard']['neuesthema']?></center></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td align="right"><nobr><?php echo $lang['kommunikationboard']['thema']; ?>&nbsp;&nbsp;</nobr></td>
                                    <td><input type="text" name="thema" class="eingabe" maxlength="100" style="width:220px;" autocomplete="off"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                <td align="right"><nobr><?php echo $lang['kommunikationboard']['icon']; ?>&nbsp;&nbsp;</nobr></td>
                                    <td><table border="0" cellspacing="0" cellpadding="0"><tr>
                                    <td><input type="radio" name="icon" value="1" style="background-color:#606060;border-color:#606060;"; checked></td>
                                    <td><img src="<?php echo $bildpfad; ?>/forum_icons/1.gif" border="0" width="15" height="15"></td>
                                    <td><input type="radio" name="icon" value="2" style="background-color:#606060;border-color:#606060;";></td>
                                    <td><img src="<?php echo $bildpfad; ?>/forum_icons/2.gif" border="0" width="15" height="15"></td>
                                    <td><input type="radio" name="icon" value="3" style="background-color:#606060;border-color:#606060;";></td>
                                    <td><img src="<?php echo $bildpfad; ?>/forum_icons/3.gif" border="0" width="15" height="15"></td>
                                    <td><input type="radio" name="icon" value="4" style="background-color:#606060;border-color:#606060;";></td>
                                    <td><img src="<?php echo $bildpfad; ?>/forum_icons/4.gif" border="0" width="15" height="15"></td>
                                    <td><input type="radio" name="icon" value="5" style="background-color:#606060;border-color:#606060;";></td>
                                    <td><img src="<?php echo $bildpfad; ?>/forum_icons/5.gif" border="0" width="15" height="15"></td>
                                    <td><input type="radio" name="icon" value="6" style="background-color:#606060;border-color:#606060;";></td>
                                    <td><img src="<?php echo $bildpfad; ?>/forum_icons/6.gif" border="0" width="15" height="15"></td>
                                    </tr></table></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td align="right"><nobr><?php echo $lang['kommunikationboard']['beitrag']; ?>&nbsp;&nbsp;</nobr></td>
                                    <td><textarea name="beitrag" wrap="soft" style="width:220px;height:100px;"></textarea></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td></td>
                                    <td><input type="submit" name="submit" value="<?php echo $lang['kommunikationboard']['abschicken']; ?>" style="width:220px;"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td></form></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr><?php } ?>
                            </table>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="forumdunkel" colspan="5"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
                </tr>
                <?php
            }
            ?>
        </table>
        </div>
        <?php
}

if ($_GET["fu"]==4) {

    $forum=$_GET["forum"];
    $icon=$_POST["icon"];

    $beginner=$_SESSION["name"];

    $letzter=time();

    $thema=$_POST["thema"];
    $beitrag=$_POST["beitrag"];

if ( ! file_exists($skrupel_path."extend/bbc/bbc.php"))
{     $beitrag=str_replace("'", "",$beitrag);
    $beitrag=str_replace("\"", "",$beitrag);
    $beitrag=str_replace("\\", "",$beitrag); }

if (@file_exists($skrupel_path."extend/bbc/bbc.php"))
{ $thema=bbc($thema); }
else { $thema=nl2br(stripslashes($thema)); }
    $thema=str_replace("'", "",$thema);
    $thema=str_replace("\"", "",$thema);
    $thema=str_replace("\\", "",$thema);

    $zeiger = @mysql_query("INSERT INTO $skrupel_forum_thema (forum,icon,thema,beginner,antworten,letzter) VALUES ('$forum', '$icon', '$thema', '$beginner', '0', '$letzter');");

    $zeiger = @mysql_query("SELECT * FROM $skrupel_forum_thema WHERE forum='$forum' AND icon='$icon' AND beginner='$beginner' AND thema='$thema' AND letzter='$letzter' and antworten='0';");
    $array = @mysql_fetch_array($zeiger);
    $idthema=$array["id"];

    $zeiger = mysql_query("INSERT INTO $skrupel_forum_beitrag (thema,forum,datum,beitrag,verfasser,spielerid) VALUES ($idthema,$forum,'$letzter','$beitrag','$beginner', '".$_SESSION["user_id"]."');");

    $backlink="board.php?fu=2&fo=".$forum;

    header('Location: '.$backlink); exit;

}

if ($_GET["fu"]==3) {
require_once ("inc/_header.php");
    $forum=$_GET["fo"];
    $thema=$_GET["thema"];

    if ($forum==1) { $formname=$lang['kommunikationboard']['offenbarungen'];}
    if ($forum==2) { $formname=$lang['kommunikationboard']['smalltalk'];}
    if ($forum==3) { $formname=$lang['kommunikationboard']['handel'];}
    if ($forum==4) { $formname=$lang['kommunikationboard']['strategie'];}
    if ($forum==5) { $formname=$lang['kommunikationboard']['howtos'];}
    if ($forum==6) { $formname=$lang['kommunikationboard']['zahlentechnisches'];}

    ?>
        <script language=JavaScript>
            function checkeingabe(e) {
                if (document.formular.beitrag.value=="") { alert('<?php echo $lang['kommunikationboard']['beitrageingeben']; ?>'); return false;}
                return true;
            }
        </script>
        <div id="bodybody" class="flexcroll" onfocus="this.blur()">
        <table border="0" width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td class="forumdunkel" width="100%" colspan="2">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td>
                                <a href="board.php?fu=1">
                                    &lt&lt&lt <?php echo $lang['kommunikationboard']['uebersicht']?></a>
                                <a href="board.php?fu=2&fo=<?php echo $forum; ?>">
                                    &lt&lt&lt <?php echo $formname; ?>
                                </a>
                            </td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="forumdunkel">
                    <center>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="1" height="20"></td>
                                <td><nobr>&nbsp;<?php echo $lang['kommunikationboard']['verfasser']?>&nbsp;</nobr></td>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="1" height="20"></td>
                            </tr>
                        </table>
                    </center>
                </td>
                <td class="forumdunkel" width="100%">
                    <center><nobr>&nbsp;<?php echo $lang['kommunikationboard']['beitrag']; ?>&nbsp;</nobr></center>
                </td>
            </tr>
            <?php
            $klasse="forumhell";

            $zeiger = @mysql_query("SELECT * FROM $skrupel_forum_beitrag where thema=$thema order by datum");
            $beitraganzahl = @mysql_num_rows($zeiger);

            if ($beitraganzahl>=1) {

                for ($i=0; $i<$beitraganzahl;$i++) {
                    $ok = @mysql_data_seek($zeiger,$i);
                
                    $array = @mysql_fetch_array($zeiger);
                    $id=$array["id"];

                    $beitrag=$array["beitrag"];
		if (file_exists($skrupel_path."extend/bbc/bbc.php"))
		{ $beitrag=bbc($beitrag); }

                    $verfasser=$array["verfasser"];
                    $spielerid=$array["spielerid"];
                    $datum=$array["datum"];
                
                    $datum=date('d.m.y G:i',$datum);
    
                    if ($klasse=='forumhell') { $klasse="forummittel"; } else { $klasse="forumhell"; }
    
                    ?>
                    <tr>
                        <td class="<?php echo $klasse; ?>" valign="top">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td style="color:<?php echo $spielerfarbe[$spielerid]; ?>;"><?php echo $verfasser; ?></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><nobr><?php echo $datum; ?></nobr></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                            </table>
                        </td>
                        <td class="<?php echo $klasse; ?>" width="100%" valign="top">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><?php echo $beitrag; ?></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                    <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            <tr>
                <td class="forumdunkel" colspan="5"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
            </tr>
            <tr>
                <td class="forumdunkel"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
                <td class="forummittel" colspan="4">
                    <center>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            </tr>
                           <?php if ($_SESSION["user_id"]){?> <tr>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                <td><form name="formular" method="post" action="board.php?fu=5&forum=<?php echo $forum; ?>&thema=<?php echo $thema; ?>" onSubmit="return checkeingabe();"></td>
                                <td><center><?php echo $lang['kommunikationboard']['antworten']; ?></center></td>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            </tr>
                                <tr>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                <td align="right"><nobr><?php echo $lang['kommunikationboard']['beitrag']; ?>&nbsp;&nbsp;</nobr></td>
                                <td><textarea name="beitrag" wrap="soft" style="width:220px;height:100px;"></textarea></td>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                <td></td>
                                <td><input type="submit" name="submit" value="<?php echo $lang['kommunikationboard']['abschicken']; ?>" style="width:220px;"></td>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                <td></form></td>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                                <td><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="5" height="5"></td>
                            </tr> <?php } ?>
                        </table>
                    </center>
                </td>
            </tr>
            <tr>
                <td class="forumdunkel" colspan="5"><img src="<?php echo $skrupel_path; ?>bilder/empty.gif" border="0" width="25" height="20"></td>
            </tr>
        </table>
        </div>
        <?php
}
if ($_GET["fu"]==5) {
    
    $forum=$_GET["forum"];
    $thema=$_GET["thema"];
    $icon=$_POST["icon"];
    
    $beginner=$_SESSION["name"];
    $letzter=time();
    $beitrag=$_POST["beitrag"];
    
if ( ! file_exists($skrupel_path."extend/bbc/bbc.php"))
{   $beitrag=nl2br(stripslashes($beitrag));
    $beitrag=str_replace("'", "",$beitrag);
    $beitrag=str_replace("\"", "",$beitrag);
    $beitrag=str_replace("\\", "",$beitrag);   }
    
    $zeiger = mysql_query("INSERT INTO $skrupel_forum_beitrag (thema,forum,datum,beitrag,verfasser,spielerid) values ('$thema', '$forum', '$letzter', '$beitrag', '$beginner', '".$_SESSION["user_id"]."');");
    $zeiger = mysql_query("UPDATE $skrupel_forum_thema set antworten=antworten+1,letzter='$letzter' where id='$thema';");
    
    
    $backlink="board.php?fu=3&fo=$forum&thema=$thema";
    
    header('Location: '.$backlink); exit;

}
require_once ("inc/_footer.php");
?>
