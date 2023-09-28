<?php

goto XI__2;
Qcv3x:
function WPinfecscanner_Captcha_Comment_Auth($comment)
{
goto fVGnu;
RuWmI:
goto YtVeX;
goto uV1Ob;
zETV2:
return $comment;
goto GIMXj;
t8a8i:
if (md5(trim((string) $_POST["\x77\160\151\156\146\x65\143\x74\163\143\x61\x6e\137\143\141\x70\164\x63\150\141\137\x63\157\155\155\x65\x6e\x74"])) == $total) {
goto o_QYf;
}
goto EAEs2;
uV1Ob:
sa7G4:
goto fGmNy;
qUayu:
goto JYXaf;
goto BsAxb;
BsAxb:
o_QYf:
goto zETV2;
GIMXj:
unset($_SESSION["\x77\160\x69\156\x66\x65\x63\x74\x73\143\141\x6e\156\x65\x72\x5f\143\x6f\155\x6d\x65\x6e\164\141\165\x74\150\137\150\x61\x73\x68"]);
goto B0fZG;
EAEs2:
$error_message = __("\111\156\x63\157\x72\x72\x65\143\x74\x20\x76\141\154\165\x65\40\157\x66\x20\x74\157\x74\141\x6c\x20\143\x61\x70\x74\x63\150\x61", "\x77\x70\151\x6e\146\x65\x63\163\x63\x61\156");
goto X_Fqe;
ATdKu:
wp_die($empty);
goto IkaXa;
IkaXa:
YtVeX:
goto H5Iqr;
fGmNy:
$empty = __("\120\x6c\x65\141\x73\x65\x20\x65\x6e\164\145\162\40\164\x68\x65\40\x63\141\x70\164\143\x68\x61\56", "\167\x70\151\156\146\145\143\x73\143\x61\x6e");
goto ATdKu;
X_Fqe:
wp_die($error_message);
goto qUayu;
qnbtU:
$total = $_SESSION["\x77\x70\151\x6e\x66\x65\143\x74\x73\x63\x61\156\156\x65\162\x5f\x63\x6f\x6d\155\x65\x6e\x74\141\x75\x74\x68\x5f\x68\141\163\150"];
goto t8a8i;
fVGnu:
if (empty($_POST["\x77\x70\x69\156\146\145\143\164\x73\x63\x61\x6e\x5f\x63\141\x70\164\143\150\x61\137\143\x6f\x6d\155\x65\x6e\164"])) {
goto sa7G4;
}
goto qnbtU;
B0fZG:
JYXaf:
goto RuWmI;
H5Iqr:
}
goto kfwHD;
hRAhm:
function wpinfecscanner_security_ipautoblock()
{
goto Fd4Iw;
WHyKQ:
XQyoB:
goto feKTu;
Es3GB:
$ip = wpinfec_security_get_ip();
goto GEZql;
fOm7k:
wJlRw:
goto WHyKQ;
jVA56:
$oneip = trim($ipblocklist[$i]);
goto vGhef;
YB2ZB:
if (empty($blocklist)) {
goto ZxiDG;
}
goto Es3GB;
Uqx0i:
goto doeE3;
goto fOm7k;
Fd4Iw:
$blocklist = trim(get_option("\167\x70\x69\156\x66\x65\x63\x74\x73\143\141\x6e\156\145\162\137\141\165\164\x6f\142\154\x6f\x63\x6b\x69\160"));
goto YB2ZB;
d_ukW:
ZxiDG:
goto uXlOE;
feKTu:
$i++;
goto wvfWh;
GEZql:
$ipblocklist = explode("\12", $blocklist);
goto W0bkh;
IgNCc:
if (!($i < count($ipblocklist))) {
goto doeE3;
}
goto jVA56;
W0bkh:
$i = 0;
goto kWm38;
vGhef:
if (!($ip == $oneip)) {
goto wJlRw;
}
goto TF9Sg;
XZJXu:
doeE3:
goto d_ukW;
TF9Sg:
die;
goto Uqx0i;
kWm38:
d1ePB:
goto IgNCc;
wvfWh:
goto d1ePB;
goto XZJXu;
uXlOE:
}
goto ntY37;
KfD7H:
function needfix_filesystem_permission_status($name, $path, $recommended)
{
goto xyqhd;
fcBJ_:
YYoC_:
goto Ls6km;
Z8WMN:
if ($configmod == "\60\x37\67\67") {
goto renhW;
}
goto VvQql;
PX_DC:
$res = wpinfectsecurity_is_file_permission_secure($recommended, $configmod);
goto kcOkD;
kcOkD:
if ($res) {
goto Vdc71;
}
goto YcFdL;
Ls6km:
return $fix;
goto dJO2B;
G8JZZ:
renhW:
goto shGro;
shGro:
$fix = true;
goto fcBJ_;
QnsMd:
YM4c0:
goto ZfObJ;
xyqhd:
$fix = false;
goto Q3qCm;
Q3qCm:
$configmod = wpinfectsecurity_get_file_permission($path);
goto Z8WMN;
cfPwn:
Vdc71:
goto A1VcW;
A8wHc:
goto mAcOD;
goto cfPwn;
A1VcW:
$fix = false;
goto H_L13;
ZfObJ:
goto YYoC_;
goto G8JZZ;
VvQql:
if (!($configmod != $recommended)) {
goto YM4c0;
}
goto PX_DC;
H_L13:
mAcOD:
goto QnsMd;
YcFdL:
$fix = true;
goto A8wHc;
dJO2B:
}
goto fcECU;
Ynnpj:
function wpinfec_security_set_lockdown($ip)
{
$len = 10;
set_transient(wpinfec_security_get_lockdown_key($ip), true, $len * 60);
}
goto i1SyZ;
PCSZt:
function wpinfecscanner_securitysuccessful_login()
{
goto NxNyK;
Mv6vx:
return;
goto IaAo7;
SeEaX:
wpinfec_security_clear_lockdown($ip);
goto q9D2K;
IaAo7:
LZT9v:
goto puDQH;
puDQH:
wpinfec_security_delete_count($ip);
goto SeEaX;
NxNyK:
if ($ip = wpinfec_security_get_ip()) {
goto LZT9v;
}
goto Mv6vx;
q9D2K:
}
goto tKKAO;
wzbFM:
add_action("\167\x70\x5f\154\157\x61\144\145\x64", "\x77\x70\151\156\x66\145\143\163\x63\x61\156\156\145\x72\x5f\x73\x65\x63\165\x72\151\x74\171\x5f\151\x70\154\157\x63\153\144\157\167\x6e");
goto s7HV4;
oTdB7:
$mysecurytysetting = json_decode($securytysettingTXT);
goto PY_U2;
zgtXQ:
function wpinfecscanner_security_logincapture()
{
goto oA1en;
Du1IZ:
Mgq5r:
goto Od8Og;
toOMu:
bpZDA:
goto Du1IZ;
pJ1g0:
if (!($security_logincaptcha == 1)) {
goto bpZDA;
}
goto AT8vR;
l0Pnw:
add_action("\154\157\147\x69\x6e\x5f\146\x6f\x72\155", "\127\x50\x69\x6e\x66\145\x63\x73\143\x61\x6e\x6e\145\x72\137\x43\x61\160\x74\143\x68\x61\x5f\114\157\147\x69\156\x5f\106\151\145\x6c\x64");
goto sg7vM;
oA1en:
global $mysecurytysetting;
goto ukRQs;
yU3s_:
$security_logincaptcha = $mysecurytysetting->security_logincaptcha;
goto pJ1g0;
ukRQs:
if (!$mysecurytysetting) {
goto Mgq5r;
}
goto yU3s_;
AT8vR:
session_start();
goto l0Pnw;
sg7vM:
add_filter("\x77\x70\x5f\141\165\164\x68\145\x6e\x74\151\143\141\164\x65\137\x75\x73\x65\x72", "\127\120\x69\156\146\x65\x63\x73\x63\x61\156\156\145\x72\x5f\103\x61\160\x74\x63\x68\x61\137\x4c\x6f\x67\151\156\137\101\165\164\x68", 10, 2);
goto toOMu;
Od8Og:
}
goto uHSS1;
J7Ivn:
function wpinfecscanner_security_ipblock()
{
goto LbrfW;
stYPp:
if (!($i < count($ipblocklist))) {
goto aS7aW;
}
goto ag7wL;
DwCbp:
$ip = wpinfec_security_get_ip();
goto nqCMY;
ag7wL:
$oneip = trim($ipblocklist[$i]);
goto RdhvD;
RdhvD:
if (!($ip == $oneip)) {
goto AttfU;
}
goto oSUIe;
WmQ9A:
if (empty($blocklist)) {
goto IPtr1;
}
goto DwCbp;
tTA_l:
F3b24:
goto LY4yh;
egYR0:
AttfU:
goto tTA_l;
QQ7ga:
goto aS7aW;
goto egYR0;
gxoAS:
$i = 0;
goto cow36;
LbrfW:
$blocklist = trim(get_option("\167\x70\151\x6e\146\x65\x63\164\163\143\x61\156\156\145\x72\x5f\x62\154\x6f\x63\153\151\x70"));
goto WmQ9A;
nqCMY:
$ipblocklist = explode("\12", $blocklist);
goto gxoAS;
LY4yh:
$i++;
goto T0bU9;
cow36:
jHBmo:
goto stYPp;
oSUIe:
die;
goto QQ7ga;
vVwuV:
aS7aW:
goto uj9Q7;
uj9Q7:
IPtr1:
goto nbabn;
T0bU9:
goto jHBmo;
goto vVwuV;
nbabn:
}
goto psAJf;
gveSd:
add_action("\167\x70\137\154\x6f\x67\151\x6e", "\167\160\137\x6c\x6f\x67\x69\x6e\141\x64\155\x69\x6e\137\146\x75\156\143\x74\151\157\x6e", 99);
goto J7Ivn;
FcsOP:
function wpinfecscanner_security_noedit()
{
goto UenmT;
n7Kfp:
if (!$mysecurytysetting) {
goto crNv5;
}
goto w1S2Q;
gQH6y:
define("\104\x49\123\101\x4c\x4c\x4f\127\137\x46\x49\x4c\105\137\105\x44\111\124", TRUE);
goto TvgGU;
oYLpo:
crNv5:
goto dxOK8;
TvgGU:
chUci:
goto oYLpo;
w1S2Q:
$security_noedit = $mysecurytysetting->security_noedit;
goto qCqpI;
qCqpI:
if (!($security_noedit == 1)) {
goto chUci;
}
goto gQH6y;
UenmT:
global $mysecurytysetting;
goto n7Kfp;
dxOK8:
}
goto AvP1N;
rTI4i:
function WPinfecscanner_Captcha_PWReset_Field()
{
goto MRy5Z;
iTQj_:
echo "\74\x2f\163\155\x61\x6c\x6c\76\74\x62\x72\76\x3c\x69\x6e\x70\165\x74\x20\151\144\x3d\42\167\x70\x69\163\137\x63\141\160\x74\143\150\x61\137\x70\x77\x72\x65\x73\145\164\x22\40\x74\x79\160\145\75\42\164\x65\x78\x74\42\x20\x76\x61\x6c\x75\x65\x3d\42\x22\40\156\141\155\145\75\42\167\x70\151\x73\x5f\x63\x61\160\164\x63\150\141\x5f\160\x77\x72\145\163\x65\164\x22\76\74\x2f\x6c\141\142\x65\154\x3e\x3c\57\160\x3e\xd\12\x20\40\40\40";
goto KR2t8;
OZJmA:
imagejpeg($my_img, NULL, 100);
goto v62mM;
fKnAL:
$question = $number1 . "\x20\x2b\40" . $number2 . "\40\x3d\x20";
goto FgBgQ;
yPF96:
imagestring($my_img, 4, 2, 4, $text, $text_colour);
goto PALaH;
FgBgQ:
$text = $question;
goto kt6X8;
vkOzg:
echo "\40\74\142\x72\x3e\x3c\163\155\x61\x6c\x6c\76";
goto VBy38;
KILjg:
yFG1t:
goto IrTzg;
KR2t8:
echo ob_get_clean();
goto PjeNX;
u5Pls:
$background = imagecolorallocate($my_img, 255, 255, 255);
goto qd60_;
oIZhG:
$my_img = imagecreate(200, 25);
goto u5Pls;
GE0z8:
$output = "\x3c\151\155\x67\40\163\162\x63\x3d\x27\x64\141\164\x61\72\x69\155\x61\147\x65\57\152\160\145\x67\x3b\x62\x61\163\145\x36\64\x2c" . base64_encode($rawImageBytes) . "\47\40\57\x3e";
goto KILjg;
ZkfPm:
$output = $question;
goto fKFKm;
qd60_:
$text_colour = imagecolorallocate($my_img, 0, 0, 0);
goto yPF96;
v62mM:
$rawImageBytes = ob_get_clean();
goto GE0z8;
fKFKm:
goto yFG1t;
goto aI04b;
IrTzg:
echo "\x20\x20\x20\40\x9\74\160\76\x3c\x6c\141\142\145\154\x3e";
goto BTgAO;
kt6X8:
if (extension_loaded("\x67\144")) {
goto VzsqW;
}
goto ZkfPm;
aI04b:
VzsqW:
goto oIZhG;
zlcKh:
$_SESSION["\x77\160\151\156\146\145\143\x74\163\x63\141\x6e\x6e\x65\162\x5f\141\x75\x74\150\x5f\x68\141\163\150\x70\167"] = md5((string) ($number1 + $number2));
goto fKnAL;
wSgNh:
$number1 = rand(99, 999);
goto AZ8CY;
MRy5Z:
ob_start();
goto wSgNh;
VBy38:
_e("\x50\154\x65\141\163\x65\x20\145\x6e\164\145\162\x20\164\150\x65\40\162\x65\x73\x75\154\164\40\x6f\x66\40\x74\x68\145\40\x63\141\x6c\143\165\154\x61\164\x69\157\156\x20\141\x62\x6f\166\x65\56", "\x77\x70\x69\156\x66\x65\143\x73\x63\x61\x6e");
goto iTQj_;
AZ8CY:
$number2 = rand(1, 4);
goto zlcKh;
PALaH:
ob_start();
goto OZJmA;
BTgAO:
echo $output;
goto vkOzg;
PjeNX:
}
goto JDCvb;
JDCvb:
function WPinfecscanner_Captcha_PWReset_Auth($errors)
{
goto ER7jS;
kB7Zl:
$error_message = __("\111\x6e\143\x6f\162\x72\145\x63\x74\40\x76\141\x6c\x75\x65\40\x6f\x66\40\164\157\164\141\154\40\x63\x61\160\x74\x63\150\141", "\x77\x70\151\156\146\x65\x63\x73\143\x61\156");
goto cBzFK;
fWO1U:
$total = $_SESSION["\167\x70\151\x6e\146\145\143\x74\163\143\x61\x6e\156\x65\162\137\x61\x75\x74\x68\137\150\141\163\150\x70\x77"];
goto JsS7M;
ER7jS:
if (empty($_POST["\x77\x70\x69\x73\x5f\x63\x61\x70\x74\x63\x68\141\137\x70\167\162\x65\x73\145\164"])) {
goto S0qah;
}
goto fWO1U;
eaH0u:
bdFia:
goto UwZ2d;
KVVG8:
u3mJ3:
goto PlJvZ;
PlJvZ:
unset($_SESSION["\x77\160\x69\x6e\x66\145\x63\164\x73\143\141\156\x6e\145\x72\x5f\x61\165\x74\x68\137\150\x61\163\150\160\167"]);
goto dedaS;
dedaS:
return $errors;
goto ATbD8;
K2aDV:
wp_die($empty);
goto eaH0u;
cBzFK:
wp_die($error_message);
goto NvKQA;
gwu7l:
goto bdFia;
goto O9zG1;
ATbD8:
J15tw:
goto gwu7l;
O9zG1:
S0qah:
goto s2Wpz;
JsS7M:
if (md5(trim((string) $_POST["\x77\x70\x69\x73\x5f\143\141\x70\164\143\150\x61\x5f\160\x77\162\145\x73\x65\164"])) == $total) {
goto u3mJ3;
}
goto kB7Zl;
s2Wpz:
$empty = __("\120\x6c\145\x61\x73\x65\40\145\156\x74\145\162\40\164\150\x65\x20\x63\x61\160\164\143\150\x61\56", "\167\160\x69\156\146\x65\x63\x73\143\x61\156");
goto K2aDV;
NvKQA:
goto J15tw;
goto KVVG8;
UwZ2d:
}
goto pW8UP;
QV0fd:
if (defined("\x41\x42\123\x50\101\124\110")) {
goto SHVgD;
}
goto ca_m9;
ddFQU:
function wpinfecscanner_securitysuccessful_logindeleteip()
{
goto vAbvG;
zKhN8:
eQVDr:
goto GVR3F;
pjRdg:
delete_transient("\x69\160\154\x6f\143\153\x5f\x64\157\167\x6e" . $ip);
goto TEAo1;
TEAo1:
delete_transient("\141\x72\143\150\151\166\x65\x5f\x69\160\154\157\143\x6b\144\x6f\167\x6e" . $ip);
goto Pw_zR;
vAbvG:
if ($ip = wpinfec_security_get_ip()) {
goto eQVDr;
}
goto Xui5W;
Xui5W:
return;
goto zKhN8;
GVR3F:
delete_transient(wpinfec_security_get_iplockdownkey($ip));
goto pjRdg;
Pw_zR:
}
goto U7Atl;
kfwHD:
function wpinfecscanner_security_commentcapture()
{
goto SBWDg;
pJlyf:
add_filter("\143\x6f\155\x6d\145\156\164\137\x66\x6f\162\x6d\x5f\x66\x69\x65\x6c\x64\x5f\x63\157\155\155\145\x6e\x74", "\127\120\x69\x6e\146\x65\x63\163\143\x61\x6e\x6e\145\x72\x5f\103\x61\160\164\143\150\141\137\103\x6f\155\155\145\156\x74\x5f\x46\x69\x65\x6c\x64");
goto IhYJr;
eseL3:
$security_commentcaptcha = $mysecurytysetting->security_commentcaptcha;
goto ssWZB;
SBWDg:
global $mysecurytysetting;
goto xOK_K;
IhYJr:
YupDd:
goto AmmN9;
ssWZB:
if (!($security_commentcaptcha == 1)) {
goto YupDd;
}
goto kNfqn;
kNfqn:
session_start();
goto QGdEU;
QGdEU:
add_filter("\x70\162\x65\x70\x72\157\143\145\x73\x73\137\143\x6f\155\155\145\x6e\x74", "\127\x50\151\156\x66\145\143\x73\x63\141\x6e\156\145\162\x5f\x43\x61\x70\164\x63\150\x61\x5f\103\157\x6d\155\x65\x6e\164\137\x41\165\164\150");
goto pJlyf;
xOK_K:
if (!$mysecurytysetting) {
goto Iefpx;
}
goto eseL3;
AmmN9:
Iefpx:
goto UsFaF;
UsFaF:
}
goto R2Sah;
ceuy9:
function wpinfecscanner_auto_redirect_after_logout()
{
wp_redirect(wpinfectsecurity_new_login_url());
exit;
}
goto CJYAt;
J6plu:
$dangeraccess = true;
goto vZTaA;
AOU32:
add_action("\151\x6e\x69\164", "\167\x70\x69\156\x66\145\x63\x73\143\141\x6e\x6e\145\x72\137\163\145\x63\165\162\151\164\x79\x5f\x70\167\x72\145\x73\x65\164\x63\141\160\164\x75\162\145");
goto ZAYKt;
KPacB:
add_action("\151\156\x69\164", "\167\160\151\156\x66\x65\143\163\x63\x61\156\156\145\x72\x5f\163\145\x63\x75\162\x69\x74\x79\x5f\x6c\x6f\147\151\x6e\154\x6f\x63\x6b\x64\157\x77\x6e");
goto fSamz;
zQMZz:
function wpinfecscanner_security_security_loginchange()
{
goto M9y1S;
mCieY:
$loginurl = get_option("\167\x70\x69\156\x66\145\x63\164\163\143\x61\x6e\x6e\x65\x72\x5f\154\x6f\x67\x69\x6e\x75\162\x6c");
goto PuPND;
F4nNi:
dvIvw:
goto HF3_E;
cBfWA:
$security_loginchange = $mysecurytysetting->security_loginchange;
goto PUCVn;
PuPND:
if (!(strlen($loginurl) > 5)) {
goto tojIm;
}
goto N5U5x;
ILlRW:
XrloH:
goto F4nNi;
N5U5x:
add_action("\167\160\137\154\x6f\141\144\x65\x64", "\167\160\151\x6e\146\145\143\x73\143\x61\156\x6e\x65\x72\x5f\163\145\143\165\162\x69\164\171\137\x6c\x6f\141\x64\145\144");
goto hqHlm;
M9y1S:
global $mysecurytysetting;
goto OHJ1A;
opAOk:
add_action("\167\160\137\x6c\x6f\x67\x6f\165\164", "\x77\160\151\x6e\146\145\x63\x73\x63\141\156\x6e\145\x72\137\141\x75\164\157\137\162\x65\x64\151\x72\145\143\x74\137\141\x66\x74\x65\x72\x5f\154\157\147\x6f\165\x74");
goto LM9KR;
PUCVn:
if (!($security_loginchange == 1)) {
goto XrloH;
}
goto mCieY;
OHJ1A:
if (!$mysecurytysetting) {
goto dvIvw;
}
goto cBfWA;
hqHlm:
add_filter("\163\151\164\145\137\165\x72\154", "\167\160\151\156\146\145\x63\163\x63\x61\156\156\x65\162\x5f\x63\x75\163\164\x6f\155\x5f\x73\x69\x74\x65\x5f\x75\x72\154");
goto opAOk;
LM9KR:
tojIm:
goto ILlRW;
HF3_E:
}
goto GDhC5;
wy2_e:
add_filter("\167\160\x5f\150\x65\141\x64\145\162\x73", "\x77\160\x69\156\146\145\x63\x73\143\141\156\156\145\x72\137\162\x65\155\x6f\x76\x65\137\170\137\x70\x69\156\147\142\x61\x63\153\137\150\x65\141\x64\x65\x72");
goto RSS40;
SzRos:
function wpinfecscanner_security_norestapi($result, $wp_rest_server, $request)
{
goto hzjbJ;
YKdmL:
BfZkA:
goto FtsXl;
iu_lp:
if (!(strpos($namespaces, "\157\145\155\142\x65\144\x2f") === 1)) {
goto IwifZ;
}
goto VZQdf;
p2BVn:
g2hmJ:
goto XXsfA;
FtsXl:
return new WP_Error("\162\145\x73\x74\137\x64\x69\163\141\142\x6c\145\x64", "\122\105\123\x54\40\101\120\111\x20\104\x49\x53\101\102\114\105\x44", array("\163\164\x61\x74\165\x73" => rest_authorization_required_code()));
goto u11Rh;
NDrSa:
if ($security_norestapi == 1) {
goto gJ8Xh;
}
goto qcQd_;
bfs6T:
if ($mysecurytysetting) {
goto Qw7mi;
}
goto gKe2U;
gKe2U:
return $result;
goto r2S4I;
Tl_Fi:
O022Y:
goto SJjkV;
SJjkV:
if (!current_user_can("\x65\144\151\164\x5f\160\157\163\164\x73")) {
goto BfZkA;
}
goto ldbA_;
Ivxs7:
$security_norestapi = $mysecurytysetting->security_norestapi;
goto NDrSa;
yJDei:
if (!(strpos($namespaces, "\152\145\164\x70\x61\x63\x6b\x2f") === 1)) {
goto g2hmJ;
}
goto MwTCI;
hzjbJ:
global $mysecurytysetting;
goto bfs6T;
r2S4I:
goto xh9ys;
goto LyzvF;
qcQd_:
return $result;
goto DTR36;
DTR36:
goto ZmVuB;
goto DeSep;
XXsfA:
if (!(strpos($namespaces, "\143\x6f\156\164\x61\143\164\x2d\x66\x6f\162\155\55\x37\57") === 1)) {
goto O022Y;
}
goto rEExC;
KPKtI:
xh9ys:
goto worDu;
rEExC:
return $result;
goto Tl_Fi;
wWYUN:
$namespaces = $request->get_route();
goto iu_lp;
u11Rh:
ZmVuB:
goto KPKtI;
MwTCI:
return $result;
goto p2BVn;
ldbA_:
return $result;
goto YKdmL;
VZQdf:
return $result;
goto eB45r;
LyzvF:
Qw7mi:
goto Ivxs7;
eB45r:
IwifZ:
goto yJDei;
DeSep:
gJ8Xh:
goto wWYUN;
worDu:
}
goto Rwguz;
M9Zm2:
$dangeraccess = false;
goto BIs3W;
uHSS1:
add_action("\x69\156\151\164", "\167\x70\151\x6e\146\x65\x63\163\x63\141\156\x6e\x65\x72\x5f\163\145\x63\x75\x72\151\164\x79\x5f\x6c\x6f\147\151\156\x63\141\160\x74\x75\162\x65");
goto rTI4i;
yxjNR:
$dangeraccess = true;
goto U0HG9;
CJYAt:
function wpinfectsecurity_is_file_permission_secure($recommended, $actual)
{
goto XwnKb;
zDl6A:
$return_result = 0 * $return_result;
goto xRKvL;
GgTh9:
if (substr($gvabinhex, -3, 1) <= substr($gvrbinhex, -3, 1)) {
goto cOOZT;
}
goto GyGph;
A900U:
$return_result = 1 * $return_result;
goto dWCCb;
YKcPQ:
goto btlsO;
goto KLMHM;
TCMrT:
if (substr($pvabinhex, -3, 1) <= substr($pvrbinhex, -3, 1)) {
goto vqw15;
}
goto enqma;
ngTN2:
$ownerv_actual = substr($actual, -3, 1);
goto SMoYb;
DvaSa:
$return_result = 1 * $return_result;
goto Hzkn3;
Bae9s:
Qa8kM:
goto aa0I0;
lkXrs:
$pvrbinhex = sprintf("\x25\x30\x34\x62", $publicv_rec);
goto dWvnm;
cBHoN:
MLcCa:
goto A900U;
gQDHS:
$return_result = 1 * $return_result;
goto qdm8R;
dLMan:
btlsO:
goto hBSpD;
K7f22:
$ovabinhex = sprintf("\45\60\64\x62", $ownerv_actual);
goto LEOhG;
uRXf7:
$publicv_actual = substr($actual, -1, 1);
goto eCTS9;
KbP4k:
$gvabinhex = sprintf("\x25\x30\64\x62", $groupv_actual);
goto TE2D1;
fvL2N:
vTSt8:
goto kevvI;
jJ3Lr:
$return_result = 0 * $return_result;
goto qEJ4R;
bsG5s:
goto FCDEo;
goto tiBcw;
Mw5nN:
GWVuo:
goto gQDHS;
MAy_k:
if (substr($pvabinhex, -2, 1) <= substr($pvrbinhex, -2, 1)) {
goto GWVuo;
}
goto TFoJH;
eCTS9:
$publicv_rec = substr($recommended, -1, 1);
goto squCw;
hBSpD:
if (substr($ovabinhex, -2, 1) <= substr($ovrbinhex, -2, 1)) {
goto DmGOs;
}
goto GMdJQ;
cd3JY:
if (substr($gvabinhex, -2, 1) <= substr($gvrbinhex, -2, 1)) {
goto MLcCa;
}
goto n3Tj9;
A2R5w:
vqw15:
goto h9zEZ;
LEOhG:
$ovrbinhex = sprintf("\x25\60\64\142", $ownerv_rec);
goto Jwr1K;
enqma:
$return_result = 0 * $return_result;
goto wPRf8;
cI1GX:
DmGOs:
goto ZybiI;
wPRf8:
goto CDlD0;
goto A2R5w;
rNN7y:
CDlD0:
goto giKlm;
squCw:
$pvabinhex = sprintf("\x25\x30\64\x62", $publicv_actual);
goto lkXrs;
PJLPx:
FCDEo:
goto ax5fN;
XwnKb:
$return_result = 1;
goto uRXf7;
CGa9w:
cOOZT:
goto DvaSa;
GMdJQ:
$return_result = 0 * $return_result;
goto yDZVG;
kevvI:
$return_result = 1 * $return_result;
goto qNyQ4;
GyGph:
$return_result = 0 * $return_result;
goto s4c7T;
s4c7T:
goto lqAHW;
goto CGa9w;
Hzkn3:
lqAHW:
goto ngTN2;
qfIan:
if (substr($ovabinhex, -3, 1) <= substr($ovrbinhex, -3, 1)) {
goto kRZiQ;
}
goto udqAU;
qNyQ4:
u6Mqd:
goto cd3JY;
JLyVg:
R_E1m:
goto MAy_k;
tym0L:
$groupv_rec = substr($recommended, -2, 1);
goto KbP4k;
qEJ4R:
goto u6Mqd;
goto fvL2N;
Jwr1K:
if (substr($ovabinhex, -1, 1) <= substr($ovrbinhex, -1, 1)) {
goto wUQTv;
}
goto ZDuHp;
dWvnm:
if (substr($pvabinhex, -1, 1) <= substr($pvrbinhex, -1, 1)) {
goto Qa8kM;
}
goto zDl6A;
qRwxC:
$return_result = 1 * $return_result;
goto dLMan;
ZybiI:
$return_result = 1 * $return_result;
goto OEPhG;
h9zEZ:
$return_result = 1 * $return_result;
goto rNN7y;
giKlm:
$groupv_actual = substr($actual, -2, 1);
goto tym0L;
aa0I0:
$return_result = 1 * $return_result;
goto JLyVg;
LCJRx:
if (substr($gvabinhex, -1, 1) <= substr($gvrbinhex, -1, 1)) {
goto vTSt8;
}
goto jJ3Lr;
OEPhG:
suiAE:
goto qfIan;
n3Tj9:
$return_result = 0 * $return_result;
goto JduH4;
tiBcw:
kRZiQ:
goto Gymgl;
udqAU:
$return_result = 0 * $return_result;
goto bsG5s;
TFoJH:
$return_result = 0 * $return_result;
goto P8ixP;
KLMHM:
wUQTv:
goto qRwxC;
JduH4:
goto pZVo0;
goto cBHoN;
Gymgl:
$return_result = 1 * $return_result;
goto PJLPx;
SMoYb:
$ownerv_rec = substr($recommended, -3, 1);
goto K7f22;
P8ixP:
goto AW_cU;
goto Mw5nN;
ax5fN:
return $return_result;
goto VIrvK;
xRKvL:
goto R_E1m;
goto Bae9s;
dWCCb:
pZVo0:
goto GgTh9;
qdm8R:
AW_cU:
goto TCMrT;
ZDuHp:
$return_result = 0 * $return_result;
goto YKcPQ;
TE2D1:
$gvrbinhex = sprintf("\45\x30\64\x62", $groupv_rec);
goto LCJRx;
yDZVG:
goto suiAE;
goto cI1GX;
VIrvK:
}
goto WEOlU;
WEOlU:
function wpinfectsecurity_get_file_permission($filepath)
{
if (!function_exists("\x66\151\x6c\145\x70\145\162\155\163")) {
$perms = "\55\61";
} else {
clearstatcache();
$perms = substr(sprintf("\x25\x6f", @fileperms($filepath)), -4);
}
return $perms;
}
goto IecQ_;
fcECU:
$r = $_SERVER["\x52\x45\121\125\x45\123\124\x5f\125\122\111"];
goto M9Zm2;
I0fmE:
function wpinfecscanner_custom_site_url($url)
{
goto POuKI;
NDJE3:
$url = str_replace(site_url("\x2f"), home_url("\57"), $url);
goto JIvQL;
o2oUi:
$url = str_replace("\167\160\55\154\x6f\x67\151\156\56\x70\150\x70", $loginurl, $url);
goto oCsqR;
POuKI:
if (!(strpos($url, "\167\160\55\154\157\x67\151\x6e\x2e\160\x68\x70") !== false)) {
goto e0kD_;
}
goto olPR5;
olPR5:
$loginurl = get_option("\x77\x70\151\x6e\x66\x65\143\164\163\x63\141\156\x6e\145\162\x5f\x6c\x6f\x67\x69\156\x75\x72\x6c");
goto dWJv4;
zfA5p:
$url = str_replace("\77", "\x26", $url);
goto NDJE3;
JIvQL:
$url = str_replace("\x77\x70\55\x6c\x6f\147\151\156\56\x70\x68\160", "\x3f" . $loginurl, $url);
goto lW3vW;
dWJv4:
if (get_option("\160\145\x72\x6d\141\154\151\x6e\x6b\x5f\163\164\x72\165\x63\164\165\162\x65")) {
goto BgMB9;
}
goto zfA5p;
jm9sG:
e0kD_:
goto r1T6L;
GK6Dj:
BgMB9:
goto o2oUi;
lW3vW:
goto JFe3Z;
goto GK6Dj;
r1T6L:
return $url;
goto W5o4o;
oCsqR:
JFe3Z:
goto jm9sG;
W5o4o:
}
goto ceuy9;
mdtHb:
function wpinfecscanner_security_iplockdown()
{
goto LjkYs;
XWBRd:
set_transient(wpinfec_security_get_iplockdownkey($ip), $c, $exptime);
goto LgSzh;
yL0lC:
W3naM:
goto IUikQ;
wm2eg:
$ip = wpinfec_security_get_ip();
goto oRusY;
IOxJV:
$exptime = 60;
goto sYSh6;
AIf4D:
$security_bruteforthlockdown = $mysecurytysetting->security_bruteforthlockdown;
goto YvgXA;
qmyIw:
Zv34H:
goto yL0lC;
vNMHK:
if (!$mysecurytysetting) {
goto Br0At;
}
goto AIf4D;
YvgXA:
if (!($security_bruteforthlockdown == 1)) {
goto W3naM;
}
goto wm2eg;
K2Dxf:
set_transient("\x69\x70\x6c\x6f\143\x6b\137\144\157\x77\156" . $ip, true, $len * 60);
goto qvUME;
HQ1Sg:
$scanner->sendblockipdata($ip, 1);
goto qmyIw;
IUikQ:
Br0At:
goto vXZtn;
eHdR0:
if (!($exptime < 1)) {
goto q9bYq;
}
goto IOxJV;
Y6_vR:
$exptime = 10 * 60;
goto qCvNP;
LgSzh:
if (!($c > absint(50))) {
goto Zv34H;
}
goto JANDl;
VZnCd:
$len = 180;
goto K2Dxf;
eeV3Q:
eX5S9:
goto XWBRd;
PLdFr:
$scanner = new MalwareScanner();
goto HQ1Sg;
sKtwQ:
require_once plugin_dir_path(__FILE__) . "\167\160\x69\x6e\146\145\x63\164\163\x63\x61\156\156\145\162\56\x70\150\160";
goto PLdFr;
oRusY:
$c = get_transient(wpinfec_security_get_iplockdownkey($ip)) + 1;
goto Y6_vR;
JANDl:
delete_transient(wpinfec_security_get_iplockdownkey($ip));
goto VZnCd;
sYSh6:
q9bYq:
goto eeV3Q;
LjkYs:
global $mysecurytysetting;
goto vNMHK;
qvUME:
set_transient("\x61\162\x63\150\x69\166\145\137\151\160\x6c\157\143\153\x64\157\167\156" . $ip, true, 60 * 60 * 24 * 30 * 6);
goto sKtwQ;
qCvNP:
if (!($c > 1)) {
goto eX5S9;
}
goto SkOO4;
SkOO4:
$exptime = get_transient_timeout(wpinfec_security_get_iplockdownkey($ip)) - time();
goto eHdR0;
vXZtn:
}
goto bSzlQ;
sK0rK:
SHVgD:
goto CNgaX;
DCbsK:
function wpinfec_security_inc_count($ip)
{
goto HyUxJ;
HyUxJ:
$c = wpinfec_security_get_count($ip) + 1;
goto zf7Fk;
mjWQK:
return $c;
goto qkDZo;
zf7Fk:
set_transient(wpinfec_security_get_key($ip), $c, 60 * 60);
goto mjWQK;
qkDZo:
}
goto R3ItW;
i1SyZ:
function wpinfec_security_is_locked_down($ip)
{
return (bool) get_transient(wpinfec_security_get_lockdown_key($ip));
}
goto cyM2O;
hJgJw:
function wpinfec_security_get_iplockdownkey($key)
{
return "\x74\162\137\x77\x70\x69\156\x66\x65\143\163\143\x61\156\x5f" . "\x69\160\x6c\x6f\143\x6b\x64\x6f\x77\x6e" . $key;
}
goto EUfam;
bWtwd:
function get_transient_timeout($transient)
{
goto SlyMX;
sQWW6:
return $transient_timeout[0];
goto W6Ag6;
SlyMX:
global $wpdb;
goto S_Meb;
S_Meb:
$transient_timeout = $wpdb->get_col("\xd\12\40\x20\x20\x20\x20\x20\x53\105\114\x45\x43\124\x20\x6f\x70\x74\x69\x6f\x6e\137\166\141\154\x75\145\15\12\40\40\x20\x20\x20\x20\106\x52\x4f\115\40" . $wpdb->options . "\xd\12\40\40\40\40\40\x20\127\x48\105\122\105\x20\x6f\x70\x74\x69\157\156\x5f\156\x61\x6d\x65\15\12\40\x20\40\x20\40\40\x4c\111\113\105\x20\x27\x25\x5f\164\162\x61\156\163\151\145\156\164\137\164\x69\155\145\157\x75\164\137" . $transient . "\45\47\xd\xa\40\40\40\40");
goto sQWW6;
W6Ag6:
}
goto mdtHb;
KRGQp:
function wpinfecscanner_remove_x_pingback_header($headers)
{
goto Fo1uH;
EGCXc:
if (!($security_nopingback == 1)) {
goto NAWd3;
}
goto yP8G0;
Fo1uH:
global $mysecurytysetting;
goto d__9z;
yP8G0:
unset($headers["\130\x2d\120\x69\156\147\142\141\143\153"]);
goto oIppy;
S9Aww:
return $headers;
goto FbFc0;
d__9z:
if (!$mysecurytysetting) {
goto cHN_E;
}
goto pvamD;
S3v1g:
cHN_E:
goto S9Aww;
oIppy:
NAWd3:
goto S3v1g;
pvamD:
$security_nopingback = $mysecurytysetting->security_nopingback;
goto EGCXc;
FbFc0:
}
goto M37Mp;
Mqzj9:
$dangeraccess = true;
goto CN231;
R3ItW:
function wpinfec_security_delete_count($ip)
{
delete_transient(wpinfec_security_get_key($ip));
}
goto uU7kX;
rLk_W:
vDH6O:
goto Uxgef;
M37Mp:
add_filter("\170\155\x6c\162\160\x63\137\155\145\x74\150\157\x64\163", "\167\x70\151\156\146\145\143\x73\x63\x61\156\x6e\x65\x72\137\144\x69\163\x61\x62\154\x65\137\170\x6d\x6c\162\160\x63\137\160\151\156\x67\142\x61\x63\x6b\x5f\155\145\164\150\x6f\144\163");
goto wy2_e;
U0HG9:
VU9gT:
goto L8Soc;
AvP1N:
add_action("\x69\x6e\151\164", "\167\x70\151\x6e\146\145\143\163\x63\x61\156\156\145\x72\137\x73\x65\x63\165\162\151\164\171\x5f\156\157\x65\144\151\164");
goto c0P0o;
Rogh4:
$securytysettingTXT = get_option("\x77\x70\x69\156\146\x65\143\164\163\143\141\156\156\x65\x72\x5f\x73\x65\x63\x75\x72\151\x74\x79");
goto eBlGu;
uU7kX:
function wpinfec_security_get_key($key)
{
return "\164\x72\x5f\x77\x70\x69\156\146\145\x63\163\x63\x61\x6e\137" . $key;
}
goto Ynnpj;
lmLln:
function wpinfecscanner_security_kill_login()
{
goto YyFNP;
HKbcK:
$die = false;
goto Za3eg;
lo1OC:
wpinfec_security_delete_count($ip);
goto D6e4T;
qY5R2:
if (wpinfec_security_is_locked_down($ip)) {
goto LWRoA;
}
goto gDPVx;
vyRFD:
$die = true;
goto FRECg;
rEhgY:
wp_die(__("\x50\154\145\141\163\145\40\167\141\151\x74\40\x31\x30\x20\x6d\x69\156\165\x74\x65\x73\40\x75\156\x74\151\154\x20\154\157\x67\x69\x6e\x20\160\x61\147\145\40\151\x73\40\x75\163\141\142\x6c\145\x2e", "\167\x70\x69\156\x66\145\143\x73\143\141\x6e"), __("\124\157\157\x20\x6d\141\x6e\171\x20\x6c\x6f\147\x69\x6e\40\x61\164\164\145\155\x70\164\x73", "\167\x70\x69\x6e\x66\x65\143\163\x63\x61\x6e"), array("\x72\145\163\x70\x6f\156\163\145" => 403));
goto r58s_;
Bb_46:
LWRoA:
goto vyRFD;
S4AVD:
goto LAvDg;
goto Bb_46;
pDVEJ:
SWnC9:
goto lo1OC;
YyFNP:
if ($ip = wpinfec_security_get_ip()) {
goto qtQow;
}
goto DKMTN;
qWLGv:
$die = true;
goto S4AVD;
bD44U:
if (!apply_filters("\167\160\151\156\x66\x65\143\163\143\x61\156\x6e\x65\162\x5f\x6c\157\147\151\156\137\x6c\157\143\153\144\157\x77\x6e\x5f\x73\150\x6f\165\x6c\144\137\x64\151\145", $die, $ip)) {
goto U2GCk;
}
goto rEhgY;
r58s_:
U2GCk:
goto kmhra;
DKMTN:
return;
goto dK_Ik;
D6e4T:
wpinfec_security_set_lockdown($ip);
goto qWLGv;
Za3eg:
if (($count = wpinfec_security_get_count($ip)) && $count > absint(2)) {
goto SWnC9;
}
goto qY5R2;
FRECg:
LAvDg:
goto bD44U;
dK_Ik:
qtQow:
goto HKbcK;
gDPVx:
goto LAvDg;
goto pDVEJ;
kmhra:
}
goto PCSZt;
I1Cu6:
if (!(strlen($securytysettingTXT) > 3)) {
goto uy7Lp;
}
goto oTdB7;
g15D3:
function wpinfec_security_get_lockdown_key($key)
{
return "\x6c\x6f\143\x6b\145\144\137\144\x6f\x77\156\x5f" . $key;
}
goto zQMZz;
Rwguz:
add_filter("\x72\145\x73\x74\x5f\160\162\x65\137\144\151\x73\160\x61\x74\x63\x68", "\x77\x70\151\156\146\x65\x63\x73\143\x61\156\x6e\x65\162\x5f\163\145\x63\165\162\x69\x74\x79\137\156\x6f\162\x65\x73\164\141\x70\x69", 10, 3);
goto FcsOP;
LLXkS:
function shapeSpace_remove_version_scripts_styles($src)
{
goto c_rny;
WEhlz:
oe6zw:
goto XW0d0;
c_rny:
if (!strpos($src, "\x76\x65\x72\x3d")) {
goto oe6zw;
}
goto tpuoI;
tpuoI:
$src = remove_query_arg("\166\145\x72", $src);
goto WEhlz;
XW0d0:
return $src;
goto n30rN;
n30rN:
}
goto l3zQp;
RSS40:
function wpinfecscanner_security_nowpscan()
{
goto ux3nC;
jMVO0:
die;
goto dINpk;
F3Hjb:
if (!(!empty($_SERVER["\x48\124\x54\120\x5f\x55\123\105\122\x5f\101\x47\105\116\124"]) && preg_match("\x2f\x57\120\123\143\x61\156\57\x69", $_SERVER["\x48\124\124\120\137\x55\123\105\122\x5f\101\x47\105\116\124"]))) {
goto svwMj;
}
goto jMVO0;
ux3nC:
global $mysecurytysetting;
goto dFH5y;
xNlPD:
$scanner = new MalwareScanner();
goto StWzz;
aI3TZ:
die;
goto OxkYY;
uglo7:
die;
goto AKGRb;
OxkYY:
ekZLg:
goto l3UbQ;
PFB8C:
xLkw3:
goto Ik4Hz;
rbWcD:
if (!($security_nowpscan == 1)) {
goto dcuGT;
}
goto F3Hjb;
dINpk:
svwMj:
goto A2HRO;
CAcPU:
$security_nowpscan = $mysecurytysetting->security_nowpscan;
goto rbWcD;
StWzz:
$scanner->sendblockipdata($_SERVER["\x52\105\x4d\x4f\x54\x45\137\x41\x44\104\x52"], 2);
goto yV62F;
AKGRb:
BKJtz:
goto OtCxq;
gwjp5:
require_once plugin_dir_path(__FILE__) . "\167\x70\151\156\x66\x65\x63\164\163\x63\141\x6e\156\145\x72\56\x70\x68\160";
goto xNlPD;
dy5rW:
if (!($transient_value !== false)) {
goto ekZLg;
}
goto aI3TZ;
IgJE_:
$transient_value = get_transient($transient_name);
goto dy5rW;
A2HRO:
$transient_name = "\x77\143\145\137\x62\154\157\x63\x6b\137" . $_SERVER["\122\105\115\x4f\124\x45\137\x41\104\x44\122"];
goto IgJE_;
OtCxq:
dcuGT:
goto PFB8C;
Fu4HK:
set_transient($transient_name, 1, DAY_IN_SECONDS);
goto gwjp5;
yV62F:
set_transient("\x61\x72\143\150\151\x76\145\x5f\167\143\145\x6c\157\x63\x6b\x64\157\167\156" . $_SERVER["\x52\105\x4d\117\x54\x45\x5f\101\x44\104\122"], true, 60 * 60 * 24 * 30 * 6);
goto uglo7;
dFH5y:
if (!$mysecurytysetting) {
goto xLkw3;
}
goto CAcPU;
l3UbQ:
if (!isset($_GET["\167\160\137\x63\x6f\156\146\151\147\137\x65\x6e\165\155\x65\x72\141\164\151\x6f\x6e"])) {
goto BKJtz;
}
goto Fu4HK;
Ik4Hz:
}
goto ejeEI;
GDhC5:
add_action("\x69\x6e\151\164", "\x77\160\151\x6e\146\x65\x63\x73\x63\x61\156\156\145\x72\x5f\163\x65\x63\165\x72\x69\x74\x79\x5f\x73\145\x63\165\162\x69\164\171\x5f\x6c\157\147\151\156\143\150\x61\156\147\145");
goto Skjt0;
EUfam:
function wpinfecscanner_security_iplockdownset()
{
goto xjcmv;
mqsNr:
gRNOY:
goto bvwI8;
HPEW0:
if (!(bool) get_transient("\151\160\x6c\157\143\153\x5f\x64\157\167\x6e" . $ip)) {
goto laSv8;
}
goto xXERZ;
vu10z:
$security_bruteforthlockdown = $mysecurytysetting->security_bruteforthlockdown;
goto GO495;
xjcmv:
global $mysecurytysetting;
goto xNaSH;
bvwI8:
EGByj:
goto KIX8K;
xNaSH:
if (!$mysecurytysetting) {
goto EGByj;
}
goto vu10z;
ntk8V:
$ip = wpinfec_security_get_ip();
goto HPEW0;
ikPWh:
laSv8:
goto mqsNr;
xXERZ:
die;
goto ikPWh;
GO495:
if (!($security_bruteforthlockdown == 1)) {
goto gRNOY;
}
goto ntk8V;
KIX8K:
}
goto bWtwd;
R2Sah:
add_action("\x69\156\x69\x74", "\x77\160\x69\156\146\145\143\163\x63\141\x6e\156\x65\x72\137\163\145\x63\x75\x72\151\164\171\x5f\x63\157\x6d\155\145\x6e\x74\x63\141\160\x74\165\162\145");
goto hVwsl;
eBlGu:
$mysecurytysetting = false;
goto I1Cu6;
CNgaX:
class WPInfectSecurity
{
public function security_filehogo($mode)
{
goto qOm3G;
BiKAv:
b5oFk:
goto XAXBm;
pI0d5:
$rules .= "\122\145\x71\165\x69\162\145\x20\x61\154\154\x20\x64\145\156\x69\145\144" . PHP_EOL;
goto MybKR;
aELyj:
$rules .= "\74\x49\x66\115\157\x64\165\154\145\x20\x6d\x6f\x64\137\x61\165\164\150\172\137\x63\x6f\162\145\56\x63\x3e" . PHP_EOL;
goto AC4Ur;
HwszR:
$rules .= "\74\106\151\154\145\x73\40\56\x68\x74\141\x63\x63\145\163\x73\76" . PHP_EOL;
goto aELyj;
O8Bt3:
return true;
goto ysPur;
pRstb:
$home_path = get_home_path();
goto FoCPV;
cTzrK:
if ($lines != false) {
goto m0sYI;
}
goto dXpFR;
CnqUL:
$lines = $this->readhtaccess("\43\x46\111\x4c\x45\137\x53\105\x43\x55\122\x49\x54\x59\x5f\x53\124\101\x52\x54", "\x23\x46\111\x4c\105\137\x53\105\103\x55\122\x49\x54\131\x5f\x45\x4e\104");
goto qItSp;
FoCPV:
$htaccess_file = $home_path . "\56\x68\164\x61\x63\x63\145\x73\163";
goto PqgIf;
pSL28:
goto y8b0Q;
goto sQips;
dXpFR:
return false;
goto Y1yb1;
q0VSS:
a_3nC:
goto pSL28;
GDo5k:
$rules .= "\x3c\x2f\x49\146\115\157\x64\x75\x6c\145\x3e" . PHP_EOL;
goto O5UGS;
CJTpE:
goto a_3nC;
goto BiKAv;
zhn16:
$rules .= "\x3c\x2f\x46\x69\154\145\x73\76" . PHP_EOL;
goto T5jjc;
xiuZS:
$rules .= "\74\x2f\111\x66\x4d\157\144\x75\x6c\145\76" . PHP_EOL;
goto ou7lk;
fdfHA:
$rules .= "\43\106\111\x4c\x45\x5f\123\x45\x43\125\x52\111\124\x59\x5f\105\116\x44" . PHP_EOL;
goto pRstb;
XAXBm:
$home_path = get_home_path();
goto xlj1Q;
ful9U:
$rules .= "\x3c\111\x66\115\157\144\x75\x6c\145\40\x6d\x6f\144\137\141\x75\x74\150\x7a\x5f\143\157\162\x65\56\143\76" . PHP_EOL;
goto pI0d5;
qItSp:
if ($lines != false) {
goto b5oFk;
}
goto nn0mM;
mkcKh:
ZA6Ta:
goto cc1w9;
MR73L:
$rules .= "\x3c\x2f\x49\146\115\x6f\x64\x75\154\145\x3e" . PHP_EOL;
goto zhn16;
cc1w9:
EolUG:
goto OU974;
T5jjc:
$rules .= "\x3c\x46\151\154\145\x73\40\x77\x70\55\143\x6f\x6e\146\151\147\56\160\150\x70\76" . PHP_EOL;
goto ful9U;
TfF1j:
$rules .= "\104\145\156\171\40\146\x72\x6f\x6d\x20\x61\x6c\x6c" . PHP_EOL;
goto MR73L;
qOm3G:
if ($mode == 1) {
goto PhQU6;
}
goto CnqUL;
OU974:
y8b0Q:
goto m4wGG;
yaxbG:
goto ZA6Ta;
goto qF1hO;
qF1hO:
GS1wN:
goto qjsYM;
O5UGS:
$rules .= "\74\x49\146\x4d\x6f\x64\x75\x6c\145\40\41\155\x6f\144\x5f\x61\x75\164\150\x7a\x5f\143\157\162\x65\x2e\143\x3e" . PHP_EOL;
goto cVOgz;
qjsYM:
return false;
goto mkcKh;
nBA9C:
m0sYI:
goto InVgO;
ysPur:
goto vtsbQ;
goto karos;
PqgIf:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto GS1wN;
}
goto ooxep;
xlj1Q:
$htaccess_file = $home_path . "\x2e\x68\164\x61\143\143\145\163\163";
goto OoqKb;
QTXqV:
$rules = "\43\106\111\x4c\x45\x5f\x53\x45\x43\125\x52\111\x54\131\137\x53\124\101\x52\124" . PHP_EOL;
goto HwszR;
karos:
FLdlz:
goto Fq_XR;
AC4Ur:
$rules .= "\x52\x65\x71\x75\151\162\x65\x20\141\154\x6c\40\144\x65\x6e\151\145\144" . PHP_EOL;
goto GDo5k;
ou7lk:
$rules .= "\x3c\x2f\x46\x69\x6c\x65\163\x3e" . PHP_EOL;
goto fdfHA;
KFk0z:
vtsbQ:
goto q0VSS;
pXvIq:
$rules .= "\104\x65\156\171\x20\146\x72\157\x6d\40\141\154\154" . PHP_EOL;
goto xiuZS;
W4PTt:
$rules .= "\117\x72\x64\x65\x72\40\x64\145\x6e\171\x2c\141\154\x6c\157\167" . PHP_EOL;
goto pXvIq;
OoqKb:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto FLdlz;
}
goto O8Bt3;
cVOgz:
$rules .= "\x4f\162\x64\145\162\40\x64\x65\x6e\171\x2c\141\x6c\x6c\157\x77" . PHP_EOL;
goto TfF1j;
MybKR:
$rules .= "\74\57\111\146\x4d\157\x64\165\154\x65\76" . PHP_EOL;
goto zvfwq;
sQips:
PhQU6:
goto kAP6V;
Y1yb1:
goto EolUG;
goto nBA9C;
kAP6V:
$lines = $this->readhtaccess("\43\106\x49\114\105\137\x53\x45\103\125\x52\x49\124\x59\137\x53\x54\x41\122\x54", "\43\x46\x49\114\x45\x5f\123\105\103\x55\x52\x49\x54\x59\x5f\x45\116\x44");
goto cTzrK;
zvfwq:
$rules .= "\x3c\111\146\x4d\157\144\165\154\x65\x20\x21\155\x6f\x64\x5f\x61\x75\x74\150\172\137\143\157\162\x65\56\143\76" . PHP_EOL;
goto W4PTt;
InVgO:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto QTXqV;
Fq_XR:
return false;
goto KFk0z;
ooxep:
return true;
goto yaxbG;
nn0mM:
return false;
goto CJTpE;
m4wGG:
}
public function security_tracktrace($mode)
{
goto Bu4nQ;
Bu4nQ:
if ($mode == 1) {
goto R8C23;
}
goto SGNwm;
c_B52:
qA9R4:
goto SBY03;
GsRgy:
$rules .= "\x52\145\167\162\151\164\145\x45\x6e\x67\151\x6e\145\40\117\x6e" . PHP_EOL;
goto WWbQ3;
mfQfA:
$rules .= "\43\123\105\122\x56\105\122\x5f\x54\122\x41\x43\x4b\124\122\101\103\105\x5f\x45\116\104" . PHP_EOL;
goto vDKb8;
SBY03:
WJbNy:
goto A7YHH;
Eaaa_:
$rules .= "\74\57\x49\x66\115\157\144\165\154\145\x3e" . PHP_EOL;
goto mfQfA;
wAWwo:
if ($lines != false) {
goto msL55;
}
goto BTNtz;
e6BmS:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto FGwqd;
}
goto jdSFz;
jdSFz:
return true;
goto PAzt5;
vDKb8:
$home_path = get_home_path();
goto tzO0_;
uKWPR:
zgX5R:
goto c_B52;
asIWs:
return false;
goto uKWPR;
R0ud4:
R8C23:
goto eNcmA;
x1pgL:
return true;
goto Vrc99;
Efr_q:
$htaccess_file = $home_path . "\56\x68\x74\141\143\x63\x65\163\163";
goto ULZaR;
RcNzb:
$home_path = get_home_path();
goto Efr_q;
QA3Oa:
WPjkn:
goto NhQcq;
WWbQ3:
$rules .= "\x52\145\167\162\151\164\x65\x43\157\x6e\144\x20\x25\173\x52\x45\121\x55\105\123\x54\137\115\105\124\x48\x4f\x44\175\40\136\50\x54\122\x41\103\105\x7c\x54\x52\x41\103\113\51" . PHP_EOL;
goto ODPmt;
ODPmt:
$rules .= "\x52\145\x77\162\151\x74\145\x52\165\x6c\145\x20\x2e\52\x20\55\x20\133\106\x5d" . PHP_EOL;
goto Eaaa_;
Pi3fI:
msL55:
goto RcNzb;
cKehr:
goto fke4l;
goto Pi3fI;
Vrc99:
goto G49sa;
goto ie0Wr;
tzO0_:
$htaccess_file = $home_path . "\x2e\150\x74\141\x63\x63\x65\163\x73";
goto e6BmS;
xlICX:
fke4l:
goto FHV6C;
t0nEC:
return false;
goto guMkP;
ULZaR:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto IUDTl;
}
goto x1pgL;
nO7g5:
FGwqd:
goto asIWs;
Ijmcr:
$rules .= "\x3c\111\x66\x4d\x6f\144\x75\x6c\x65\40\155\157\x64\137\x72\x65\167\x72\151\x74\145\x2e\143\x3e" . PHP_EOL;
goto GsRgy;
BTNtz:
return false;
goto cKehr;
PAzt5:
goto zgX5R;
goto nO7g5;
yfQEJ:
$rules = "\43\x53\x45\x52\126\x45\122\x5f\x54\x52\101\103\x4b\124\122\101\103\x45\x5f\x53\124\x41\122\x54" . PHP_EOL;
goto Ijmcr;
ZCuss:
if ($lines != false) {
goto WPjkn;
}
goto t0nEC;
ie0Wr:
IUDTl:
goto hEFVh;
SGNwm:
$lines = $this->readhtaccess("\43\x53\105\122\126\x45\122\x5f\124\122\x41\103\113\x54\x52\x41\103\x45\x5f\123\x54\101\x52\x54", "\43\x53\105\122\x56\x45\122\137\124\x52\x41\x43\x4b\x54\x52\101\x43\105\137\105\x4e\104");
goto wAWwo;
hEFVh:
return false;
goto Q4AtY;
FHV6C:
goto WJbNy;
goto R0ud4;
Q4AtY:
G49sa:
goto xlICX;
guMkP:
goto qA9R4;
goto QA3Oa;
NhQcq:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto yfQEJ;
eNcmA:
$lines = $this->readhtaccess("\43\x53\x45\122\x56\x45\122\137\124\x52\x41\x43\113\124\122\101\103\105\137\x53\x54\x41\122\124", "\x23\x53\105\x52\126\105\122\x5f\x54\122\x41\x43\x4b\x54\x52\101\x43\105\137\105\116\104");
goto ZCuss;
A7YHH:
}
public function security_serverhogo($mode)
{
goto De6dq;
FJTgi:
$rules .= "\74\57\111\x66\115\x6f\144\165\154\145\x3e" . PHP_EOL;
goto glID3;
XEzNy:
return false;
goto F9aKU;
HHl7M:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto pknCu;
}
goto NCE9t;
i6TVW:
jcvSW:
goto Fu8gV;
kq9oU:
$rules .= "\74\106\151\154\145\163\x20\x77\x70\x2d\x63\x6f\x6e\x66\151\x67\55\163\141\155\160\154\x65\56\160\150\160\76" . PHP_EOL;
goto L7kW2;
ATL21:
$rules .= "\x52\145\x71\165\151\x72\x65\x20\141\154\154\40\144\145\156\x69\x65\144" . PHP_EOL;
goto tveZ2;
kD0gz:
$rules .= "\x23\123\x45\122\126\x45\122\x5f\123\105\103\125\122\x49\124\x59\137\105\x4e\x44" . PHP_EOL;
goto ctGsW;
vo83B:
CLxAT:
goto s53Xh;
hhzMY:
return false;
goto k2k7p;
O2YOo:
$rules .= "\x3c\106\151\x6c\145\x73\x20\162\x65\x61\144\x6d\x65\x2e\x68\164\x6d\154\x3e" . PHP_EOL;
goto JPMkQ;
XcoBh:
return false;
goto e_9fS;
lLjTZ:
$rules .= "\74\57\x49\x66\x4d\157\144\x75\154\145\x3e" . PHP_EOL;
goto YlBK8;
tveZ2:
$rules .= "\x3c\57\x49\146\115\157\x64\165\154\145\x3e" . PHP_EOL;
goto ZJGjR;
glID3:
$rules .= "\74\111\146\115\x6f\x64\165\154\145\x20\41\x6d\x6f\x64\x5f\x61\x75\x74\x68\172\x5f\x63\x6f\162\x65\56\x63\x3e" . PHP_EOL;
goto k4pwK;
k0tjC:
va3Jk:
goto mFR8E;
XfXXg:
$lines = $this->readhtaccess("\43\123\x45\122\126\x45\x52\137\x53\105\103\x55\122\x49\x54\x59\x5f\123\124\x41\122\124", "\43\123\105\x52\126\105\122\137\123\x45\x43\x55\x52\111\x54\x59\137\105\x4e\x44");
goto ryW3D;
q1OJp:
goto aE9ri;
goto cc2jj;
FcGa5:
$rules = "\x23\123\x45\122\126\105\x52\137\123\105\x43\x55\x52\x49\x54\x59\x5f\x53\124\x41\122\x54" . PHP_EOL;
goto Hfc1m;
YlBK8:
$rules .= "\x3c\111\146\115\157\x64\165\x6c\145\40\41\x6d\x6f\x64\137\x61\165\x74\x68\172\137\143\157\162\x65\56\143\x3e" . PHP_EOL;
goto hs1F1;
OPvTX:
$rules .= "\x52\x65\x71\x75\x69\162\145\x20\x61\154\x6c\x20\144\x65\156\x69\x65\144" . PHP_EOL;
goto FJTgi;
ryW3D:
if ($lines != false) {
goto jcvSW;
}
goto W5jnH;
K38Oh:
if ($lines != false) {
goto Wrw8x;
}
goto hhzMY;
UzFNt:
$rules .= "\74\x2f\x49\146\x4d\157\144\x75\154\145\x3e" . PHP_EOL;
goto cDR0Z;
G6vGI:
$rules .= "\104\x65\x6e\171\40\146\x72\157\155\40\x61\154\x6c" . PHP_EOL;
goto MyYxn;
kX056:
$htaccess_file = $home_path . "\56\x68\x74\141\x63\x63\145\x73\163";
goto HHl7M;
AjG5C:
$rules .= "\74\57\x49\x66\115\x6f\x64\165\x6c\x65\x3e" . PHP_EOL;
goto UPHHm;
JPMkQ:
$rules .= "\74\x49\x66\x4d\x6f\144\165\x6c\x65\40\x6d\157\144\x5f\141\165\x74\x68\x7a\x5f\143\157\x72\x65\x2e\x63\x3e" . PHP_EOL;
goto ATL21;
mFR8E:
A2Ou9:
goto NJThS;
k2k7p:
goto CLxAT;
goto HcAEs;
xJKNh:
goto va3Jk;
goto i6TVW;
k4pwK:
$rules .= "\x4f\x72\x64\x65\162\x20\144\145\x6e\x79\x2c\141\154\154\157\167" . PHP_EOL;
goto Ud25N;
hs1F1:
$rules .= "\117\x72\144\145\162\40\144\x65\156\171\54\x61\x6c\x6c\x6f\167" . PHP_EOL;
goto G6vGI;
AOH2R:
$rules .= "\x3c\x2f\106\151\x6c\x65\163\x3e" . PHP_EOL;
goto kq9oU;
MyYxn:
$rules .= "\x3c\x2f\111\146\115\157\144\x75\154\145\x3e" . PHP_EOL;
goto AOH2R;
TGTXy:
$rules .= "\x52\x65\x71\x75\x69\162\x65\x20\141\154\x6c\40\144\x65\156\x69\145\144" . PHP_EOL;
goto lLjTZ;
Ud25N:
$rules .= "\104\x65\x6e\x79\40\146\162\157\155\40\141\154\154" . PHP_EOL;
goto AjG5C;
y2IuH:
$rules .= "\x4f\162\x64\145\x72\x20\144\x65\156\x79\x2c\x61\154\154\x6f\x77" . PHP_EOL;
goto DV7MS;
Fu8gV:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto FcGa5;
De6dq:
if ($mode == 1) {
goto NsFYL;
}
goto AivPB;
DV7MS:
$rules .= "\104\145\156\171\x20\146\x72\157\155\40\141\154\x6c" . PHP_EOL;
goto UzFNt;
P4P4m:
$rules .= "\x3c\x49\146\x4d\157\x64\165\x6c\x65\40\x6d\x6f\x64\137\141\165\164\150\172\137\143\157\162\145\x2e\143\76" . PHP_EOL;
goto TGTXy;
qavJB:
$rules .= "\x3c\106\151\154\x65\163\40\154\x69\x63\x65\x6e\163\x65\56\x74\170\164\76" . PHP_EOL;
goto P4P4m;
AivPB:
$lines = $this->readhtaccess("\43\x53\105\122\x56\105\122\x5f\x53\x45\x43\125\x52\111\x54\x59\x5f\123\x54\x41\122\x54", "\43\x53\x45\122\126\x45\x52\x5f\123\x45\x43\125\x52\111\x54\x59\137\105\x4e\x44");
goto K38Oh;
s53Xh:
goto A2Ou9;
goto HIYxw;
cc2jj:
pknCu:
goto XEzNy;
dnMpY:
wu10H:
goto XcoBh;
NCE9t:
return true;
goto q1OJp;
YwAlP:
$home_path = get_home_path();
goto xDhqp;
T_344:
goto RLLSU;
goto dnMpY;
cDR0Z:
$rules .= "\x3c\57\106\151\154\145\163\x3e" . PHP_EOL;
goto kD0gz;
KSFYR:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto wu10H;
}
goto zfx5w;
F9aKU:
aE9ri:
goto k0tjC;
xDhqp:
$htaccess_file = $home_path . "\x2e\150\164\141\143\x63\x65\163\163";
goto KSFYR;
W5jnH:
return false;
goto xJKNh;
Hfc1m:
$rules .= "\123\x65\x72\166\x65\x72\123\x69\147\156\x61\164\165\162\x65\x20\x4f\146\x66" . PHP_EOL;
goto qavJB;
L7kW2:
$rules .= "\74\x49\x66\115\157\x64\165\x6c\145\40\x6d\157\144\x5f\141\x75\164\150\172\137\143\x6f\162\x65\56\x63\x3e" . PHP_EOL;
goto OPvTX;
ZJGjR:
$rules .= "\x3c\111\146\115\157\x64\x75\x6c\x65\40\x21\x6d\157\x64\137\x61\x75\x74\150\x7a\x5f\143\x6f\x72\145\56\143\x3e" . PHP_EOL;
goto y2IuH;
ctGsW:
$home_path = get_home_path();
goto kX056;
HIYxw:
NsFYL:
goto XfXXg;
e_9fS:
RLLSU:
goto vo83B;
UPHHm:
$rules .= "\74\x2f\x46\151\x6c\145\163\76" . PHP_EOL;
goto O2YOo;
HcAEs:
Wrw8x:
goto YwAlP;
zfx5w:
return true;
goto T_344;
NJThS:
}
public function security_authorhogo($mode)
{
goto q7Et_;
hCeMu:
$rules = "\43\x41\x55\124\110\x4f\122\110\117\107\117\137\123\124\x41\x52\124" . PHP_EOL;
goto aNTP8;
mBa3N:
$htaccess_file = $home_path . "\56\150\164\x61\143\x63\145\x73\x73";
goto s0tSf;
sabeL:
goto qHFxA;
goto DjjfO;
SIOUb:
$lines = $this->readhtaccess("\43\101\x55\124\x48\117\122\110\x4f\x47\x4f\137\x53\124\x41\x52\124", "\x23\x41\125\x54\x48\117\x52\110\x4f\107\117\x5f\x45\x4e\104");
goto TwYry;
vIBKR:
pPFSO:
goto rlLgL;
YJrPk:
$htaccess_file = $home_path . "\x2e\150\x74\x61\x63\143\x65\x73\163";
goto P50Ua;
s9g8k:
RbgDj:
goto DHqUW;
rlLgL:
$home_path = get_home_path();
goto YJrPk;
DHqUW:
return false;
goto skdGF;
S6xBZ:
qHFxA:
goto LD9I0;
uSiNK:
return false;
goto ah2X0;
KEeuE:
VGnte:
goto d1dJl;
S94C6:
return false;
goto zqfgq;
oORPd:
$rules .= "\74\57\x49\x66\x4d\x6f\x64\x75\x6c\x65\76" . PHP_EOL;
goto DhyI0;
VZIuX:
return true;
goto Qm3Jq;
Pt2l4:
goto VGnte;
goto xYr15;
xYr15:
OHgo8:
goto SIOUb;
XAAy1:
$home_path = get_home_path();
goto mBa3N;
Qm3Jq:
goto rgteD;
goto s9g8k;
XL50H:
lPFvB:
goto yMRRW;
P50Ua:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto Ks4na;
}
goto BnAhY;
DhyI0:
$rules .= "\x23\x41\x55\124\x48\x4f\122\x48\x4f\x47\x4f\137\105\116\x44" . PHP_EOL;
goto XAAy1;
dYLnK:
$lines = $this->readhtaccess("\x23\x41\125\x54\x48\x4f\x52\110\117\x47\117\x5f\x53\x54\101\122\124", "\43\x41\125\x54\x48\x4f\122\110\117\107\x4f\x5f\x45\116\104");
goto jhyW8;
tB3Ke:
$rules .= "\122\x65\x77\x72\151\164\x65\122\x75\154\145\40\x5e\x61\x75\164\150\x6f\x72\x2f\50\x2e\52\51\x20\x2d\40\x5b\122\x3d\64\x30\x34\x2c\x4c\135" . PHP_EOL;
goto tTf9A;
TwYry:
if ($lines != false) {
goto lPFvB;
}
goto uSiNK;
yMRRW:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto hCeMu;
ah2X0:
goto PFSC2;
goto XL50H;
skdGF:
rgteD:
goto ZmY31;
zqfgq:
goto EMN1Z;
goto vIBKR;
s0tSf:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto RbgDj;
}
goto VZIuX;
DjjfO:
Ks4na:
goto lZo04;
aNTP8:
$rules .= "\74\x49\146\x4d\x6f\x64\165\154\145\40\x6d\x6f\144\x5f\162\x65\167\x72\151\164\145\56\x63\76" . PHP_EOL;
goto r7p1M;
tTf9A:
$rules .= "\x52\145\x77\162\151\x74\145\103\157\156\x64\x20\x25\x7b\x51\125\x45\122\131\x5f\x53\124\x52\111\116\107\175\x20\x61\165\x74\x68\157\x72\x3d\50\56\x2a\x29" . PHP_EOL;
goto FFZsY;
BnAhY:
return true;
goto sabeL;
q7Et_:
if ($mode == 1) {
goto OHgo8;
}
goto dYLnK;
r7p1M:
$rules .= "\x52\x65\x77\162\x69\x74\145\105\156\147\x69\156\x65\40\x4f\156" . PHP_EOL;
goto tB3Ke;
jhyW8:
if ($lines != false) {
goto pPFSO;
}
goto S94C6;
lZo04:
return false;
goto S6xBZ;
LD9I0:
EMN1Z:
goto Pt2l4;
ZmY31:
PFSC2:
goto KEeuE;
FFZsY:
$rules .= "\x52\x65\x77\162\151\164\145\122\x75\154\x65\40\x5e\x24\x20\55\40\x5b\122\75\x34\60\x34\x2c\x4c\x5d" . PHP_EOL;
goto oORPd;
d1dJl:
}
public function security_blockip2($setting)
{
goto XCSg5;
T0N_p:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto K30Yt;
bTenZ:
if (!$apache24) {
goto CvB8D;
}
goto jQOhD;
gnBS7:
$apache24 = true;
goto ukryu;
zCiXT:
sE0Ro:
goto A5igb;
JnAqd:
goto Ls2vz;
goto Zz2Nv;
nHUli:
lPDbG:
goto R0n0K;
ukMiU:
return false;
goto fmDe4;
l8Lkg:
goto nIE9E;
goto IGdEH;
XCSg5:
$mode = 0;
goto Kb23L;
Wv8fb:
UYt6T:
goto hyHWU;
ehKPD:
goto atbVY;
goto vMlXn;
E00Ol:
$rules .= "\x6f\162\144\145\162\x20\x61\x6c\154\157\167\54\144\145\x6e\x79" . PHP_EOL;
goto pDMqM;
NecKj:
return true;
goto ZFthD;
vQhX8:
goto A0suC;
goto tOpdN;
l0e9G:
if (!filter_var($ip, FILTER_VALIDATE_IP)) {
goto mag_X;
}
goto JeDnB;
tPu7V:
oGHTa:
goto l8Lkg;
R0n0K:
$rules .= "\x23\102\114\x4f\103\113\x49\120\137\x45\116\104\62" . PHP_EOL;
goto o2CU6;
g9QBS:
$rules .= "\122\145\161\165\x69\162\145\x20\141\x6c\x6c\40\147\x72\141\156\164\145\x64" . PHP_EOL;
goto iKD1y;
KW2Xr:
if ($lines != false) {
goto wkw_d;
}
goto K39Jc;
HYDQ3:
$version = apache_get_version();
goto h2XEa;
vMlXn:
YChXu:
goto T0N_p;
A_Uqs:
if ($mode == 1) {
goto hdBgn;
}
goto jgRYV;
Kb23L:
if (empty($setting)) {
goto UYt6T;
}
goto mNdq1;
uIImC:
$iptxt = "\144\145\x6e\171\40\146\162\x6f\155\40" . $ip;
goto JnAqd;
BDwHj:
if (function_exists("\x61\x70\141\143\x68\x65\x5f\147\145\x74\137\x76\145\162\163\151\x6f\x6e")) {
goto XP2IT;
}
goto NvEG3;
eBfh7:
e0TWg:
goto CzOs2;
oHaxg:
aLhGr:
goto y5YQW;
JeDnB:
if ($apache24) {
goto du23r;
}
goto uIImC;
tOpdN:
XP2IT:
goto HYDQ3;
v2F3X:
CvB8D:
goto xqHeS;
iKD1y:
goto cpgcj;
goto v2F3X;
Wio31:
goto w1B_B;
goto dNcjY;
jQOhD:
$rules .= "\x3c\122\x65\161\165\151\162\145\x41\154\154\76" . PHP_EOL;
goto g9QBS;
NvEG3:
$version = $_SERVER["\x53\x45\122\126\x45\x52\x5f\x53\117\106\124\127\x41\x52\105"];
goto vQhX8;
pDMqM:
$rules .= "\x61\x6c\x6c\157\x77\x20\146\x72\157\x6d\x20\141\154\154" . PHP_EOL;
goto nnjR6;
H0mEW:
$i = 0;
goto tvm3T;
Jr8Fd:
YN6hc:
goto ENhNj;
xl39O:
$rules .= $iptxt . PHP_EOL;
goto bFFOk;
A5igb:
atbVY:
goto MY0QK;
CzOs2:
$i++;
goto bmhYp;
csz1W:
$ip = $setting[$i];
goto l0e9G;
fmDe4:
w1B_B:
goto tPu7V;
bmhYp:
goto ez7Id;
goto bn27r;
o2CU6:
$home_path = get_home_path();
goto j2jYY;
jgRYV:
$lines = $this->readhtaccess("\43\102\x4c\x4f\103\x4b\x49\x50\137\x53\124\101\x52\124\62", "\43\x42\114\117\x43\113\x49\x50\137\105\116\104\62");
goto KW2Xr;
nnjR6:
cpgcj:
goto H0mEW;
bFFOk:
mag_X:
goto eBfh7;
ENhNj:
return false;
goto zCiXT;
IcgHi:
if (!($i < count($setting))) {
goto TXVY4;
}
goto csz1W;
Rc80Q:
if (!(strpos($version, "\x32\x2e\x34") !== false || strpos($version, "\x32\56\x35") !== false)) {
goto n1Mgh;
}
goto gnBS7;
n_0w6:
wkw_d:
goto nE4Uu;
ePZNQ:
goto oGHTa;
goto n_0w6;
j2jYY:
$htaccess_file = $home_path . "\56\x68\x74\x61\x63\x63\145\x73\163";
goto g1F2o;
l6hox:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto Cyn2I;
}
goto h57mp;
h2XEa:
A0suC:
goto Rc80Q;
kU35Z:
if (!$apache24) {
goto aLhGr;
}
goto vQN4V;
vQN4V:
$rules .= "\x3c\x2f\122\x65\x71\165\151\x72\145\101\154\154\x3e" . PHP_EOL;
goto yiu3m;
mNdq1:
$mode = 1;
goto Wv8fb;
yiu3m:
goto lPDbG;
goto oHaxg;
g1F2o:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto YN6hc;
}
goto NecKj;
K39Jc:
return false;
goto ePZNQ;
xqHeS:
$rules .= "\74\114\151\x6d\151\164\x20\107\105\x54\40\x48\105\101\104\40\120\x4f\x53\124\76" . PHP_EOL;
goto E00Ol;
nqXtT:
$iptxt = "\122\145\x71\x75\151\162\145\x20\x6e\157\164\x20\151\x70\40" . $ip;
goto FHLEh;
IGdEH:
hdBgn:
goto vAyae;
nE4Uu:
$home_path = get_home_path();
goto fQTdI;
fQTdI:
$htaccess_file = $home_path . "\x2e\150\164\141\143\x63\145\163\163";
goto l6hox;
Zz2Nv:
du23r:
goto nqXtT;
K30Yt:
$rules = "\43\x42\114\117\103\x4b\x49\x50\x5f\123\x54\x41\122\x54\x32" . PHP_EOL;
goto bTenZ;
hyHWU:
$apache24 = false;
goto BDwHj;
vAyae:
$lines = $this->readhtaccess("\43\102\x4c\x4f\103\x4b\111\x50\x5f\123\124\101\122\x54\x32", "\43\x42\114\x4f\103\113\111\x50\x5f\105\116\x44\62");
goto iw2Kw;
FHLEh:
Ls2vz:
goto xl39O;
ukryu:
n1Mgh:
goto A_Uqs;
h57mp:
return true;
goto Wio31;
MY0QK:
nIE9E:
goto zQ3qz;
ZFthD:
goto sE0Ro;
goto Jr8Fd;
tvm3T:
ez7Id:
goto IcgHi;
iw2Kw:
if ($lines != false) {
goto YChXu;
}
goto w3A0t;
w3A0t:
return false;
goto ehKPD;
dNcjY:
Cyn2I:
goto ukMiU;
y5YQW:
$rules .= "\74\57\x4c\x69\x6d\151\x74\76" . PHP_EOL;
goto nHUli;
bn27r:
TXVY4:
goto kU35Z;
zQ3qz:
}
public function security_noindex($mode)
{
goto NYJmW;
Y5zx7:
return false;
goto uBqAD;
IPm_n:
tz7Wd:
goto HliBa;
IUFDI:
se41e:
goto XSJWW;
uBqAD:
goto RLq8S;
goto cQgTD;
R2EHZ:
$rules .= "\x23\x4e\117\x49\116\104\x45\x58\137\x45\x4e\x44" . PHP_EOL;
goto EG_BA;
RzrjC:
goto se41e;
goto PSGhn;
jBpyw:
$lines = $this->readhtaccess("\43\116\x4f\111\x4e\x44\x45\x58\137\x53\124\x41\x52\x54", "\43\x4e\x4f\111\x4e\104\105\x58\137\x45\116\x44");
goto hpmmA;
DKAhG:
goto yyx6k;
goto OEjj0;
gmC9u:
return true;
goto nUHLE;
PSGhn:
bSlmy:
goto jBpyw;
nUHLE:
goto tz7Wd;
goto q4MvZ;
OUGyj:
CDhnG:
goto IUFDI;
QP92N:
$lines = $this->readhtaccess("\43\116\x4f\x49\116\104\105\130\x5f\123\x54\x41\x52\124", "\x23\x4e\x4f\111\x4e\x44\x45\x58\137\105\116\x44");
goto tkpVT;
cBzrC:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto m7IVO;
}
goto gmC9u;
j2aNv:
$rules = "\x23\x4e\x4f\x49\116\104\x45\130\137\x53\x54\x41\122\x54" . PHP_EOL;
goto npsqC;
q4MvZ:
m7IVO:
goto P7ISp;
gu6UM:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto cn9CN;
}
goto WJfAg;
Fsw5G:
return false;
goto noW1g;
noW1g:
yyx6k:
goto OUGyj;
EG_BA:
$home_path = get_home_path();
goto KJqTO;
WJfAg:
return true;
goto DKAhG;
HliBa:
RLq8S:
goto RzrjC;
cQgTD:
CK4R2:
goto b3i2s;
Gs6SL:
return false;
goto i_z9X;
b3i2s:
$home_path = get_home_path();
goto ey6Pt;
tkpVT:
if ($lines != false) {
goto CK4R2;
}
goto Y5zx7;
P7ISp:
return false;
goto IPm_n;
ey6Pt:
$htaccess_file = $home_path . "\x2e\x68\x74\141\143\143\145\163\x73";
goto cBzrC;
npsqC:
$rules .= "\x4f\160\x74\x69\157\x6e\163\x20\x2d\x49\x6e\x64\x65\x78\x65\163" . PHP_EOL;
goto R2EHZ;
t4dbP:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto j2aNv;
KJqTO:
$htaccess_file = $home_path . "\56\150\164\x61\x63\143\145\163\x73";
goto gu6UM;
NYJmW:
if ($mode == 1) {
goto bSlmy;
}
goto QP92N;
OEjj0:
cn9CN:
goto Fsw5G;
hpmmA:
if ($lines != false) {
goto ODGe1;
}
goto Gs6SL;
i_z9X:
goto CDhnG;
goto Xi9Zu;
Xi9Zu:
ODGe1:
goto t4dbP;
XSJWW:
}
public function security_noproxycomment($mode)
{
goto STtFE;
HiFJf:
$rules .= "\122\145\x77\x72\x69\x74\145\x43\x6f\x6e\x64\x20\45\173\x48\124\124\120\72\x48\124\124\x50\137\x50\x43\137\122\105\115\117\124\x45\x5f\x41\104\104\122\x7d\x20\41\x5e\x24\40\x5b\117\x52\x5d" . PHP_EOL;
goto E9JCo;
E9JCo:
$rules .= "\x52\x65\x77\x72\x69\164\145\x43\x6f\156\144\40\45\173\x48\x54\124\x50\72\x48\x54\x54\x50\x5f\x43\x4c\x49\105\x4e\124\x5f\111\x50\x7d\40\41\136\44" . PHP_EOL;
goto oK9_N;
oXWF9:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto Z4hJ6;
IQ1kO:
$htaccess_file = $home_path . "\x2e\150\164\141\x63\143\x65\163\163";
goto O89VK;
NeGPo:
$rules .= "\122\145\167\x72\151\x74\x65\103\x6f\x6e\144\40\x25\173\x48\x54\124\x50\x3a\x50\122\x4f\130\131\137\103\x4f\x4e\x4e\x45\103\124\111\117\x4e\x7d\40\41\x5e\44\x20\x5b\x4f\122\135" . PHP_EOL;
goto HUVap;
JRr0C:
RY5m4:
goto qGIA9;
STtFE:
if ($mode == 1) {
goto oYKJD;
}
goto aSkft;
TUXSX:
XhdIP:
goto NiPGR;
IpBIg:
$rules .= "\122\x65\167\162\x69\x74\145\103\157\x6e\x64\x20\45\173\x48\124\x54\x50\72\x55\x53\105\122\x41\107\105\x4e\124\137\126\x49\101\x7d\40\x21\136\44\x20\x5b\x4f\x52\135" . PHP_EOL;
goto tRuyJ;
oK9_N:
$rules .= "\x52\x65\x77\162\x69\164\145\122\x75\x6c\145\40\x77\x70\55\143\157\x6d\155\145\156\x74\163\55\160\x6f\x73\x74\134\x2e\x70\x68\160\x20\55\40\133\106\x5d" . PHP_EOL;
goto Wf8oD;
rGCgP:
oYKJD:
goto wD6pX;
JjnoB:
goto RY5m4;
goto rGCgP;
AAVG0:
return false;
goto MvNsf;
wD6pX:
$lines = $this->readhtaccess("\x23\x53\124\x4f\x50\x5f\120\122\x4f\130\131\x43\x4f\115\115\105\116\124\137\x53\124\101\x52\124", "\x23\123\x54\x4f\x50\x5f\x50\122\117\x58\x59\103\x4f\115\x4d\x45\116\124\137\105\116\x44");
goto fdNRm;
YM90v:
$rules .= "\122\x65\x77\x72\151\164\x65\105\156\x67\x69\156\x65\40\x4f\x6e" . PHP_EOL;
goto kxI3k;
lxObU:
$rules .= "\x52\145\167\x72\151\x74\x65\x43\x6f\156\144\40\x25\x7b\x48\x54\x54\120\72\x58\x5f\106\x4f\122\x57\x41\122\x44\105\104\137\110\117\123\124\x7d\40\x21\136\44\x20\133\117\x52\135" . PHP_EOL;
goto NeGPo;
zJgob:
goto VjX5m;
goto Cwxh6;
Cwxh6:
YPCtU:
goto oXWF9;
O89VK:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto XhdIP;
}
goto w13hB;
fdNRm:
if ($lines != false) {
goto YPCtU;
}
goto f6C7y;
cfz6Z:
dGWt3:
goto JjnoB;
HUVap:
$rules .= "\122\145\167\162\x69\164\x65\103\x6f\x6e\x64\x20\x25\173\110\x54\124\120\x3a\x58\x50\122\x4f\130\x59\x5f\x43\x4f\x4e\x4e\105\x43\x54\111\117\x4e\x7d\x20\x21\x5e\x24\40\133\117\x52\135" . PHP_EOL;
goto HiFJf;
jD85v:
if ($lines != false) {
goto MWoxQ;
}
goto l2jFB;
aSkft:
$lines = $this->readhtaccess("\x23\123\124\117\120\x5f\x50\x52\117\130\x59\103\117\115\x4d\x45\x4e\x54\137\123\124\x41\x52\x54", "\x23\123\124\x4f\120\x5f\x50\x52\117\130\x59\x43\x4f\x4d\x4d\x45\x4e\x54\x5f\105\116\104");
goto jD85v;
z5tTe:
return true;
goto hFjqA;
tRuyJ:
$rules .= "\122\145\x77\x72\x69\x74\x65\x43\157\x6e\x64\x20\45\173\110\x54\124\x50\x3a\130\x5f\x46\x4f\x52\127\101\x52\104\105\x44\137\106\117\122\x7d\40\x21\x5e\x24\x20\133\x4f\122\x5d" . PHP_EOL;
goto lxObU;
NiPGR:
return false;
goto kLNAd;
Wf8oD:
$rules .= "\74\x2f\x49\x66\115\x6f\x64\x75\x6c\x65\x3e" . PHP_EOL;
goto mqloW;
O3RGE:
$htaccess_file = $home_path . "\x2e\x68\x74\x61\143\143\x65\x73\x73";
goto pLVp1;
BqVqn:
$rules .= "\x52\x65\x77\162\151\x74\145\x43\157\x6e\x64\40\45\173\110\x54\x54\120\72\106\117\x52\x57\x41\x52\104\105\104\x7d\40\41\136\x24\x20\x5b\117\x52\x5d" . PHP_EOL;
goto IpBIg;
hFjqA:
goto PZyBf;
goto WQ0v5;
WzS5c:
VjX5m:
goto JRr0C;
Z4hJ6:
$rules = "\x23\x53\124\117\x50\x5f\120\122\117\x58\x59\103\117\x4d\x4d\x45\116\x54\x5f\123\124\101\122\x54" . PHP_EOL;
goto nc3AZ;
MvNsf:
PZyBf:
goto cfz6Z;
WQ0v5:
C5nNJ:
goto AAVG0;
kxI3k:
$rules .= "\x52\x65\x77\162\x69\x74\x65\x43\157\x6e\144\x20\x25\173\x52\105\121\x55\105\123\124\x5f\115\x45\x54\x48\x4f\104\x7d\40\136\120\117\123\x54" . PHP_EOL;
goto Wwi31;
nc3AZ:
$rules .= "\x3c\x49\x66\115\x6f\144\165\154\145\40\155\x6f\x64\137\162\145\167\162\x69\164\145\x2e\143\x3e" . PHP_EOL;
goto YM90v;
it4jt:
goto dGWt3;
goto mSNdP;
Wwi31:
$rules .= "\122\145\x77\x72\x69\164\145\x43\157\156\x64\40\45\x7b\x48\124\124\120\72\x56\x49\101\175\40\41\x5e\x24\40\133\x4f\x52\x5d" . PHP_EOL;
goto BqVqn;
t6lNO:
$home_path = get_home_path();
goto O3RGE;
mqloW:
$rules .= "\43\123\x54\x4f\x50\137\x50\122\117\130\x59\x43\x4f\115\x4d\105\x4e\x54\137\x45\116\104" . PHP_EOL;
goto ySw2b;
ySw2b:
$home_path = get_home_path();
goto IQ1kO;
w13hB:
return true;
goto dbQ7C;
f6C7y:
return false;
goto zJgob;
mSNdP:
MWoxQ:
goto t6lNO;
dbQ7C:
goto Lk4_u;
goto TUXSX;
pLVp1:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto C5nNJ;
}
goto z5tTe;
kLNAd:
Lk4_u:
goto WzS5c;
l2jFB:
return false;
goto it4jt;
qGIA9:
}
public function readhtaccess($start, $end)
{
goto bEtzg;
RdC4y:
p15bI:
goto eiC7g;
tir5c:
$htaccess_file = $home_path . "\56\150\164\x61\143\143\x65\x73\163";
goto OCZ0k;
bEtzg:
$home_path = get_home_path();
goto tir5c;
eiC7g:
$file = fopen($htaccess_file, "\x72");
goto RPFPG;
su6pu:
if (!$readlineok) {
goto wZ2XB;
}
goto OllkG;
StdUC:
C5oMq:
goto HQxwk;
om7KU:
PRfgk:
goto StdUC;
r6OHp:
uM_4m:
goto zY3Xi;
WtpuN:
return $lines;
goto r6OHp;
mlfsL:
if (!($line = fgets($file))) {
goto PRfgk;
}
goto n6gsS;
BOj84:
z9s6I:
goto su6pu;
WhtKf:
if (file_exists($htaccess_file)) {
goto p15bI;
}
goto HHsbC;
OCZ0k:
if (file_exists($htaccess_file)) {
goto h97St;
}
goto ZYC8c;
OllkG:
$lines .= $line . PHP_EOL;
goto BQdW3;
ZYC8c:
@file_put_contents($htaccess_file, '');
goto dkaRt;
n6gsS:
$line = trim($line);
goto tkhhU;
HHsbC:
return false;
goto MxhOL;
BQdW3:
wZ2XB:
goto XxV5v;
MxhOL:
goto uM_4m;
goto RdC4y;
HQxwk:
fclose($file);
goto WtpuN;
nHFaW:
$readlineok = true;
goto lTc9Q;
RPFPG:
$readlineok = true;
goto GkmDd;
dkaRt:
h97St:
goto WhtKf;
lTc9Q:
lvH7e:
goto QPtlo;
QPtlo:
goto aGJSC;
goto om7KU;
tkhhU:
if (!($line == $start)) {
goto z9s6I;
}
goto FJlbO;
FJlbO:
$readlineok = false;
goto BOj84;
GkmDd:
$lines = '';
goto zS05R;
EWsTk:
aGJSC:
goto mlfsL;
XxV5v:
if (!($line == $end && $readlineok == false)) {
goto lvH7e;
}
goto nHFaW;
zS05R:
if (!$file) {
goto C5oMq;
}
goto EWsTk;
zY3Xi:
}
public function security_spambot($mode)
{
goto SqPRS;
z0Q0k:
$rules .= "\122\145\167\x72\x69\164\145\103\157\156\144\x20\x25\x7b\x48\x54\124\120\x5f\122\105\106\105\122\x45\122\x7d\x20\41\50\136\56\x2a\134\x3a\134\57\134\57" . $url_string . "\x29\40\133\116\x43\54\117\x52\135" . PHP_EOL;
goto yrxRr;
B0HMf:
$rules .= "\74\57\x49\x66\x4d\x6f\x64\165\x6c\145\x3e" . PHP_EOL;
goto PuulP;
TI21q:
$home_path = get_home_path();
goto P8kEH;
i7Zhe:
$rules .= "\x3c\x49\x66\x4d\157\144\165\x6c\145\40\155\157\144\137\162\145\167\x72\x69\164\x65\56\143\76" . PHP_EOL;
goto wJCRK;
L258i:
ykwoT:
goto qiBiT;
wSuN7:
$rules = "\x23\x42\114\x4f\x43\x4b\137\x53\120\101\x4d\102\x4f\x54\x53\x5f\123\124\101\122\x54" . PHP_EOL;
goto i7Zhe;
eLnzX:
if ($lines != false) {
goto qIwA8;
}
goto A5grS;
mT8rU:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto Ni2Xg;
}
goto ln_tv;
d_4fp:
return true;
goto RQ6GS;
Fl02Y:
Ni2Xg:
goto aglsl;
mkBv1:
$lines = $this->readhtaccess("\43\102\114\117\x43\113\137\123\x50\101\x4d\x42\x4f\124\x53\x5f\123\124\x41\122\x54", "\43\x42\x4c\117\x43\x4b\x5f\123\x50\101\x4d\x42\x4f\x54\123\x5f\105\116\104");
goto eLnzX;
l2EJW:
yE00f:
goto L258i;
ln_tv:
return true;
goto VcIUh;
A5grS:
return false;
goto UUzDh;
UUzDh:
goto yE00f;
goto f87Ql;
C1I0C:
if ($lines != false) {
goto gTSw9;
}
goto W_L8P;
vC_PW:
lM4Tq:
goto cr7ZF;
CAP0I:
$home_path = get_home_path();
goto v18F9;
byufP:
gTSw9:
goto TI21q;
PuulP:
$rules .= "\43\102\114\117\103\x4b\137\123\x50\101\x4d\x42\x4f\124\123\137\105\x4e\x44" . PHP_EOL;
goto CAP0I;
cr7ZF:
return false;
goto a9v1h;
f87Ql:
qIwA8:
goto Rqiat;
d2zEO:
goto tBPbD;
goto byufP;
FaL_K:
tBPbD:
goto Xy9SN;
Rqiat:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto wSuN7;
dlb4o:
oakrN:
goto mkBv1;
VcIUh:
goto K9DKz;
goto Fl02Y;
N4Sdq:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto lM4Tq;
}
goto d_4fp;
QoSys:
$rules .= "\x52\x65\167\x72\x69\x74\x65\x52\x75\154\x65\x20\x2e\x2a\x20\150\164\x74\x70\x3a\x2f\57\61\x32\x37\56\60\x2e\60\56\x31\40\x5b\x4c\135" . PHP_EOL;
goto B0HMf;
a9v1h:
a3EjA:
goto l2EJW;
yrxRr:
$rules .= "\122\x65\x77\162\151\x74\x65\x43\157\156\144\x20\x25\173\x48\x54\124\120\137\125\123\105\x52\x5f\101\x47\x45\116\x54\175\40\136\x24" . PHP_EOL;
goto QoSys;
aglsl:
return false;
goto bJvCB;
Xy9SN:
goto ykwoT;
goto dlb4o;
v18F9:
$htaccess_file = $home_path . "\56\x68\x74\141\x63\x63\x65\163\x73";
goto N4Sdq;
RQ6GS:
goto a3EjA;
goto vC_PW;
bJvCB:
K9DKz:
goto FaL_K;
GWJLu:
$rules .= "\x52\x65\x77\162\x69\x74\145\x43\x6f\x6e\x64\x20\x25\173\122\x45\x51\x55\105\x53\x54\137\x55\122\111\x7d\40\136\50\x2e\x2a\x29\x3f\x77\x70\55\143\x6f\x6d\x6d\x65\156\164\x73\x2d\x70\157\x73\164\x5c\x2e\x70\150\x70\x28\56\52\51\44" . PHP_EOL;
goto z0Q0k;
W_L8P:
return false;
goto d2zEO;
SqPRS:
if ($mode == 1) {
goto oakrN;
}
goto m0hFc;
wJCRK:
$rules .= "\122\145\167\x72\151\x74\x65\x45\x6e\147\151\x6e\x65\x20\x4f\156" . PHP_EOL;
goto Ujiyd;
m0hFc:
$lines = $this->readhtaccess("\43\102\x4c\x4f\x43\113\x5f\x53\120\x41\x4d\102\117\124\123\x5f\123\x54\101\122\x54", "\x23\102\x4c\x4f\103\113\137\x53\x50\101\x4d\x42\117\124\x53\137\x45\x4e\104");
goto C1I0C;
P8kEH:
$htaccess_file = $home_path . "\56\150\x74\141\x63\x63\x65\x73\x73";
goto mT8rU;
Ujiyd:
$rules .= "\122\x65\167\162\151\x74\x65\103\x6f\156\144\40\x25\173\122\105\x51\125\105\123\124\x5f\115\x45\124\110\117\104\175\x20\x50\x4f\123\x54" . PHP_EOL;
goto GWJLu;
qiBiT:
}
public function security_nowpscan($mode)
{
goto H691x;
vOOim:
$home_path = get_home_path();
goto CCTEt;
lIPZe:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto DYvjQ;
IAElk:
DWQ9w:
goto xSQAu;
tYpdl:
return false;
goto Hcj4x;
nTXxy:
goto Y1ZhM;
goto CKcMj;
WdnVc:
goto aY0IS;
goto Z5Thk;
d4W5g:
goto JJT_Q;
goto Rgi53;
sZiT0:
$rules .= "\122\145\x77\x72\x69\164\145\x52\165\154\145\40\x5e\50\56\52\x29\x77\x70\x2d\x63\x6f\x6e\x74\x65\x6e\x74\57\160\154\x75\x67\x69\x6e\x73\x2f\50\56\x2a\51\57\x72\145\x61\x64\155\x65\x5c\x2e\164\170\164\44\x20\55\x20\x5b\x52\75\64\60\x34\54\114\x5d" . PHP_EOL;
goto AaFYz;
qu8cM:
$rules .= "\122\145\x77\162\151\x74\145\x43\157\x6e\x64\40\45\x7b\122\x45\x51\x55\x45\123\124\x5f\x46\x49\114\105\x4e\101\115\105\x7d\40\x21\x2d\x66" . PHP_EOL;
goto KW2iY;
xRfm8:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto FoLwF;
}
goto FlHE3;
QCNg1:
$rules .= "\x52\145\x77\162\x69\164\145\x52\165\154\145\x20\x5e\x28\x2e\52\51\167\160\55\x63\x6f\x6e\x74\x65\x6e\x74\x2f\160\x6c\x75\147\151\156\163\x2f\x28\56\x2a\51\x2f\143\150\x61\x6e\x67\x65\154\x6f\147\134\56\x74\170\164\x24\x20\x2d\40\x5b\122\75\64\60\x34\x2c\x4c\135" . PHP_EOL;
goto qu8cM;
CCTEt:
$htaccess_file = $home_path . "\x2e\x68\x74\x61\143\143\145\x73\163";
goto xRfm8;
Hcj4x:
aY0IS:
goto JxGG1;
JxGG1:
JmKW4:
goto nTXxy;
FlHE3:
return true;
goto qQSze;
Z5Thk:
yxu66:
goto tYpdl;
qQSze:
goto Z8kPA;
goto X0ajx;
cuUWs:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto yxu66;
}
goto FqGDg;
aIr0j:
$rules .= "\x52\145\167\x72\x69\x74\145\122\x75\154\145\x20\136\162\x65\x61\x64\155\x65\x5c\56\150\x74\x6d\x6c\44\40\x2d\40\133\x52\75\x34\60\64\54\x4c\54\x4e\103\x5d" . PHP_EOL;
goto jaRS6;
AmVfk:
return false;
goto eLojP;
klHWu:
$rules .= "\122\x65\x77\162\151\x74\x65\122\x75\x6c\x65\40\x5e\x77\x70\x2d\x63\x6f\x6e\146\151\x67\134\56\160\150\x70\134\56\163\x77\x70\44\40\x69\x6e\144\x65\170\56\160\x68\x70\x3f\167\160\137\x63\157\156\146\151\x67\137\x65\x6e\165\155\x65\x72\141\164\151\x6f\156\x3d\x31\40\x5b\x4c\x5d" . PHP_EOL;
goto NNhZM;
X0ajx:
FoLwF:
goto AmVfk;
WBAjk:
$lines = $this->readhtaccess("\43\116\x4f\x57\x50\123\103\x41\116\x5f\123\124\x41\122\x54", "\43\116\117\x57\x50\x53\x43\x41\x4e\x5f\105\x4e\104");
goto yHxBs;
KW2iY:
$rules .= "\x52\145\167\162\x69\x74\145\x52\x75\x6c\x65\40\x5e\167\x70\x2d\x63\x6f\156\146\x69\x67\x5c\56\x70\x68\x70\134\56\x73\x61\166\145\x24\40\x69\156\144\145\170\x2e\x70\150\x70\x3f\167\160\x5f\143\x6f\x6e\146\151\147\x5f\x65\x6e\165\x6d\145\162\141\x74\x69\x6f\156\x3d\x31\x20\x5b\x4c\x5d" . PHP_EOL;
goto j1ME1;
awtw6:
$rules .= "\x52\145\167\x72\x69\x74\145\105\156\x67\x69\x6e\x65\x20\117\156" . PHP_EOL;
goto aIr0j;
yHxBs:
if ($lines != false) {
goto T7izv;
}
goto jWXFA;
xSQAu:
$home_path = get_home_path();
goto vCI8S;
i_Fz3:
$lines = $this->readhtaccess("\43\116\117\127\x50\123\103\101\116\137\123\124\x41\122\124", "\x23\116\117\127\120\x53\103\101\116\x5f\105\x4e\104");
goto LZPOm;
NNhZM:
$rules .= "\x3c\x2f\111\146\x4d\x6f\x64\165\154\x65\x3e" . PHP_EOL;
goto UaCmJ;
jaRS6:
$rules .= "\x52\145\167\x72\x69\x74\145\122\x75\154\145\x20\x5e\162\145\141\144\x6d\145\x5c\x2e\164\x78\164\44\40\55\x20\x5b\x52\75\64\60\64\x2c\114\54\116\103\135" . PHP_EOL;
goto pIuei;
j1ME1:
$rules .= "\x52\x65\x77\162\x69\x74\145\x52\x75\154\145\40\x5e\134\56\x77\160\55\x63\157\156\146\x69\x67\134\56\x70\x68\x70\134\x2e\x73\167\160\44\40\151\x6e\144\x65\x78\x2e\x70\150\x70\x3f\167\x70\137\x63\x6f\x6e\146\x69\x67\x5f\145\x6e\165\155\x65\162\141\164\151\x6f\x6e\x3d\61\x20\133\114\x5d" . PHP_EOL;
goto klHWu;
vCI8S:
$htaccess_file = $home_path . "\x2e\150\x74\x61\143\x63\145\x73\x73";
goto cuUWs;
eLojP:
Z8kPA:
goto XF0oS;
K0Jkt:
return false;
goto tDdu0;
FqGDg:
return true;
goto WdnVc;
DYvjQ:
$rules = "\x23\x4e\117\x57\x50\x53\103\101\116\137\123\x54\101\x52\x54" . PHP_EOL;
goto T9FqP;
UdKgL:
$rules .= "\x52\145\167\x72\151\164\145\122\165\x6c\145\x20\136\167\160\55\x69\156\x63\154\x75\144\145\163\57\152\x73\57\x74\151\156\171\x6d\143\145\57\167\160\55\164\x69\156\171\155\x63\x65\134\56\x6a\163\134\56\147\172\x24\40\x69\x6e\144\145\x78\56\160\150\160\77\141\x64\166\141\x6e\143\145\144\x5f\x66\x69\x6e\x67\x65\162\160\x72\x69\x6e\164\151\156\x67\75\61\x20\x5b\114\135" . PHP_EOL;
goto sZiT0;
OIQey:
Y1ZhM:
goto iOk2e;
pIuei:
$rules .= "\122\x65\x77\162\151\164\145\x52\x75\154\145\40\136\x63\150\x61\x6e\147\145\x6c\157\x67\134\x2e\x74\170\x74\x24\x20\55\x20\x5b\122\75\64\x30\64\x2c\114\54\x4e\103\135" . PHP_EOL;
goto UdKgL;
tDdu0:
goto JmKW4;
goto IAElk;
LZPOm:
if ($lines != false) {
goto DWQ9w;
}
goto K0Jkt;
Rgi53:
T7izv:
goto lIPZe;
AaFYz:
$rules .= "\x52\x65\167\x72\x69\x74\145\x52\165\154\145\x20\136\x28\x2e\52\x29\167\160\55\x63\x6f\156\164\145\156\x74\57\x70\154\x75\x67\151\x6e\163\57\x28\x2e\x2a\51\x2f\162\x65\141\144\155\145\x5c\56\150\x74\155\154\x24\x20\x2d\x20\133\122\x3d\x34\60\64\54\x4c\135" . PHP_EOL;
goto QCNg1;
UaCmJ:
$rules .= "\43\116\117\x57\x50\123\x43\x41\x4e\x5f\x45\116\104" . PHP_EOL;
goto vOOim;
T9FqP:
$rules .= "\x3c\x49\146\x4d\x6f\144\x75\x6c\x65\40\x6d\x6f\x64\x5f\x72\145\x77\x72\151\x74\x65\56\x63\x3e" . PHP_EOL;
goto awtw6;
H691x:
if ($mode == 1) {
goto Vm9z2;
}
goto i_Fz3;
CKcMj:
Vm9z2:
goto WBAjk;
XF0oS:
JJT_Q:
goto OIQey;
jWXFA:
return false;
goto d4W5g;
iOk2e:
}
private function wpinfectscan_dbrtbinstall()
{
goto fa_J3;
HWgnJ:
$table_name = $wpdb->prefix . "\151\156\x66\145\x63\x74\x73\143\x61\x6e\x6e\x65\162\162\145\x61\154\164\x69\x6d\x65\x62\x6c\x6f\143\x6b";
goto q8ySu;
fa_J3:
global $wpdb;
goto c5v6T;
YWmL2:
dbDelta($sql);
goto twN7A;
q8ySu:
$charset_collate = $wpdb->get_charset_collate();
goto RPX1K;
RPX1K:
$sql = "\103\x52\x45\x41\124\105\x20\x54\x41\102\114\x45\x20" . $table_name . "\x20\x28\xd\xa\40\x20\40\40\x20\40\x20\40\40\40\40\40\140\x69\144\x60\40\x69\x6e\x74\50\x31\x31\51\40\x4e\x4f\124\x20\x4e\x55\x4c\x4c\40\x41\125\124\117\137\111\x4e\103\122\105\115\105\x4e\x54\54\xd\xa\40\40\40\x20\40\40\x20\x20\40\x20\40\40\x60\146\x69\x6c\x65\160\141\x74\x68\140\40\x76\x61\162\x63\150\141\x72\50\x31\x30\x32\64\51\40\x44\105\x46\101\x55\114\124\40\116\125\x4c\114\x2c\15\xa\40\40\40\40\40\40\x20\x20\40\x20\40\40\140\146\x69\154\x65\x6e\x61\x6d\145\x60\x20\166\x61\162\x63\150\x61\x72\50\62\65\65\51\x20\x44\105\106\101\x55\x4c\124\40\116\x55\114\x4c\54\15\12\40\x20\x20\40\x20\40\x20\x20\x20\40\40\x20\x60\x67\x65\164\161\x75\x65\162\171\140\x20\164\145\170\x74\54\15\xa\40\40\40\40\40\40\x20\40\x20\x20\40\40\140\160\x6f\x73\164\161\x75\145\162\x79\140\x20\164\145\x78\164\54\15\12\x20\40\40\40\x20\40\40\x20\x20\x20\40\40\140\151\x70\x76\x34\140\40\166\x61\x72\143\x68\x61\x72\50\65\x30\51\x20\104\x45\x46\101\x55\x4c\x54\40\116\125\x4c\114\x2c\15\12\40\40\40\40\40\x20\x20\x20\40\x20\40\x20\x60\151\160\166\66\140\x20\166\x61\162\143\150\141\x72\50\65\x30\x29\x20\x44\x45\106\101\125\114\x54\x20\x4e\125\x4c\x4c\54\15\12\x20\40\x20\40\x20\x20\x20\40\40\x20\40\x20\140\x75\x73\x65\x72\x61\x67\145\x6e\164\x60\x20\166\141\162\143\x68\141\x72\50\61\60\62\x34\x29\x20\104\105\x46\101\x55\114\124\x20\116\x55\x4c\114\x2c\15\xa\40\40\40\40\40\x20\x20\40\40\x20\x20\40\x60\x61\x64\x64\144\141\x74\145\140\40\x64\141\x74\145\164\151\155\145\40\116\x4f\x54\40\116\x55\114\114\54\xd\xa\x20\40\x20\40\x20\40\x20\40\x20\40\x20\x20\x50\122\x49\x4d\101\x52\131\x20\x4b\105\x59\x20\x20\50\151\144\x29\xd\xa\40\x20\40\40\x20\40\40\40\x29\x20" . $charset_collate . "\73";
goto BKbEj;
c5v6T:
$wpinfectscan_dbrtb_version = "\61\x2e\x30";
goto HWgnJ;
twN7A:
add_option("\x77\160\151\x6e\146\x65\x63\164\x73\143\x61\156\x5f\144\x62\x72\x74\142\x5f\166\145\162\163\x69\157\156", $wpinfectscan_dbrtb_version);
goto CBrtx;
BKbEj:
require_once ABSPATH . "\x77\x70\x2d\x61\x64\x6d\151\x6e\57\151\156\x63\x6c\x75\x64\x65\163\x2f\165\x70\147\162\x61\144\x65\x2e\160\150\x70";
goto YWmL2;
CBrtx:
}
public function security_realtimeblock($mode)
{
goto BX8GP;
sua7_:
if (!($scanner->getpro() != 1)) {
goto C0WW8;
}
goto iGyMc;
GfzgW:
$lines = $this->readhtaccess("\43\123\x45\122\126\x45\122\x5f\x52\x45\x41\114\124\111\115\105\x42\x4c\117\103\x4b\x5f\x53\124\x41\122\x54", "\x23\123\x45\122\x56\105\122\x5f\122\x45\101\114\x54\111\115\105\x42\x4c\117\x43\x4b\x5f\x45\116\104");
goto nViyh;
RohLH:
if ($lines != false) {
goto tKBun;
}
goto Ac6mq;
Fbkt8:
$thesitepath = parse_url(get_home_url());
goto jbCYz;
v_ZGf:
if ($mode == 1) {
goto FftHS;
}
goto GfzgW;
X4Qvu:
return false;
goto rBoRI;
hCAxt:
goto fh0nN;
goto WG12k;
BX8GP:
global $wpdb;
goto vvWxn;
hnYXV:
$rules .= "\122\145\167\162\x69\164\x65\122\x75\154\145\x20\136\x28\56\x2a\51\44\40" . $homepath . "\x2f\x77\x70\x2d\x63\x6f\x6e\164\x65\156\164\x2f\160\x6c\x75\x67\x69\x6e\163\57\167\x70\151\x6e\146\145\143\x73\x63\x61\156\57\162\x65\x71\x75\x65\163\x74\143\x61\x70\x74\x75\x72\145\x72\x2e\160\x68\160\40\x5b\114\54\105\75\117\122\111\107\x5f\125\122\x49\72\44\x31\77\45\x31\x5d" . PHP_EOL;
goto ogBEB;
om2yU:
$htaccess_file = $home_path . "\56\x68\x74\141\x63\x63\145\163\x73";
goto IxZs5;
Jt6AX:
FftHS:
goto nwYKl;
ogBEB:
$rules .= "\x3c\57\111\146\115\x6f\x64\165\x6c\145\76" . PHP_EOL;
goto jwye8;
D63wX:
$rules .= "\122\145\x77\x72\151\x74\x65\103\x6f\156\x64\40\45\x7b\121\125\105\122\131\137\x53\x54\122\x49\x4e\107\175\40\41\x28\x2e\x2a\x29" . $rkey . "\50\x2e\52\x29\x20\133\x4e\103\x5d" . PHP_EOL;
goto EVtzQ;
X4Zb6:
$rules .= "\x52\x65\x77\162\151\164\145\x43\x6f\156\144\x20\45\x7b\122\x45\121\125\x45\123\124\137\125\x52\x49\x7d\x20\x21\x28\56\52\x29\162\x65\161\x75\x65\x73\164\x63\141\x70\x74\x75\162\x65\x72\56\160\x68\160\x28\x2e\52\x29\40\133\x4e\103\x5d" . PHP_EOL;
goto D63wX;
m97o2:
return true;
goto weQ48;
v2VAI:
if (!($wpdb->get_var("\x53\110\117\x57\x20\x54\x41\102\x4c\105\x53\40\x4c\111\113\105\40\47" . $table_name . "\x27") != $table_name)) {
goto Nh0W3;
}
goto c2EqD;
jbCYz:
$thesitepath = $thesitepath["\x70\x61\x74\x68"];
goto Jio5T;
fs9pN:
GvTnK:
goto MlC3z;
EVtzQ:
$rules .= "\x52\145\x77\162\151\x74\x65\x43\x6f\156\144\x20\x25\173\122\105\x51\125\x45\x53\124\x5f\106\111\114\x45\x4e\101\115\105\x7d\40\x2d\x66" . PHP_EOL;
goto Kxb2c;
lIJ23:
$home_path = get_home_path();
goto om2yU;
Ac6mq:
return false;
goto hCAxt;
XZHKK:
$rules .= "\122\x65\167\162\x69\164\x65\102\x61\163\145\x20" . $thesitepath . "\x2f" . PHP_EOL;
goto oVH87;
SIxq7:
$homepath = $homepath["\160\141\x74\x68"];
goto hnYXV;
VUSOh:
C0WW8:
goto dcA7x;
MlC3z:
fIbnJ:
goto LB2jB;
suf52:
$rules .= "\x3c\x49\146\115\157\x64\165\x6c\x65\x20\155\x6f\144\137\162\145\x77\162\x69\x74\145\x2e\143\x3e" . PHP_EOL;
goto QCrEx;
sYVhY:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto fja28;
}
goto R88Ck;
eekqI:
goto r8DlN;
goto To3Rc;
AUlOp:
SXJ62:
goto lIJ23;
weQ48:
goto GvTnK;
goto JHFa2;
dcA7x:
h0hry:
goto v_ZGf;
f3EAv:
return false;
goto yfhdM;
c2EqD:
$this->wpinfectscan_dbrtbinstall();
goto jT6y9;
LB2jB:
goto cdJEJ;
goto Jt6AX;
vvWxn:
$table_name = $wpdb->prefix . "\151\156\x66\x65\x63\x74\x73\x63\141\x6e\x6e\145\x72\x72\145\x61\x6c\164\151\x6d\145\x62\x6c\x6f\143\153";
goto v2VAI;
iGyMc:
$mode = 0;
goto VUSOh;
WG12k:
tKBun:
goto GwTLl;
nwYKl:
$lines = $this->readhtaccess("\43\x53\x45\122\126\105\x52\x5f\122\105\x41\x4c\124\x49\115\105\x42\114\x4f\103\x4b\x5f\x53\124\x41\x52\124", "\43\123\105\x52\126\x45\x52\x5f\122\x45\101\114\x54\x49\115\x45\x42\x4c\117\x43\113\x5f\105\x4e\104");
goto RohLH;
hTvsf:
$rules .= "\122\145\167\162\151\x74\145\103\x6f\x6e\x64\x20\x25\173\122\105\121\125\105\x53\x54\137\x55\122\111\175\40\x21\x28\56\52\51\151\156\x64\x65\x78\x2e\x70\x68\160\x20\133\116\103\135" . PHP_EOL;
goto iHHRp;
QTc1y:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto Fbkt8;
Kxb2c:
$homepath = parse_url(get_site_url());
goto SIxq7;
SzTFz:
require_once plugin_dir_path(__FILE__) . "\x77\x70\151\x6e\146\x65\143\164\x73\143\x61\x6e\156\x65\x72\56\160\150\x70";
goto k9WyC;
QW0a5:
if (!($mode == 1)) {
goto h0hry;
}
goto SzTFz;
DX5lo:
$rules .= "\x52\x65\167\162\151\164\145\103\x6f\x6e\x64\40\45\x7b\121\125\x45\122\x59\137\x53\124\x52\111\116\107\x7d\40\x28\56\52\x29" . PHP_EOL;
goto X4Zb6;
jwye8:
$rules .= "\43\x53\x45\x52\126\105\122\x5f\x52\105\101\114\124\111\115\x45\x42\x4c\x4f\103\113\137\x45\x4e\x44" . PHP_EOL;
goto fOFFm;
oVH87:
$rules .= "\122\x65\167\x72\151\x74\x65\103\157\x6e\144\40\x25\173\x52\x45\x51\125\x45\123\124\x5f\115\x45\124\110\117\x44\x7d\x20\50\120\x4f\x53\x54\174\107\105\124\x29" . PHP_EOL;
goto hTvsf;
U6h9g:
cdJEJ:
goto JM1YI;
yfhdM:
r8DlN:
goto Gg1yY;
nViyh:
if ($lines != false) {
goto SXJ62;
}
goto X4Qvu;
HmW60:
$htaccess_file = $home_path . "\56\x68\x74\x61\x63\143\x65\x73\x73";
goto sYVhY;
JHFa2:
LohlN:
goto KlHj0;
QCrEx:
$rules .= "\x52\x65\x77\162\151\164\x65\105\156\x67\x69\x6e\145\40\117\156" . PHP_EOL;
goto XZHKK;
Gg1yY:
fh0nN:
goto U6h9g;
jT6y9:
Nh0W3:
goto QW0a5;
rBoRI:
goto fIbnJ;
goto AUlOp;
R88Ck:
return true;
goto eekqI;
iHHRp:
$rules .= "\x52\x65\167\162\x69\164\x65\103\157\x6e\x64\40\45\173\122\105\x51\125\105\x53\x54\137\125\122\x49\x7d\40\50\x2e\52\x29\56\x70\150\x70\x20\133\116\x43\135" . PHP_EOL;
goto DX5lo;
To3Rc:
fja28:
goto f3EAv;
IxZs5:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto LohlN;
}
goto m97o2;
KlHj0:
return false;
goto fs9pN;
Jio5T:
$rules = "\43\123\x45\x52\x56\105\x52\137\122\x45\101\114\x54\x49\115\x45\x42\x4c\117\103\x4b\137\123\x54\101\122\124" . PHP_EOL;
goto suf52;
GwTLl:
$rkey = trim(get_option("\167\x70\x69\156\146\145\x63\164\x73\x63\x61\x6e\156\x65\162\x5f\162\145\x61\154\164\151\155\145\142\x6c\157\x63\153\153\145\x79"));
goto QTc1y;
k9WyC:
$scanner = new MalwareScanner();
goto sua7_;
fOFFm:
$home_path = get_home_path();
goto HmW60;
JM1YI:
}
public function security_nodirectaccessincludes($mode)
{
goto UDWct;
zEaEQ:
return true;
goto GRBWO;
eOJcy:
$rules .= "\122\145\x77\162\x69\164\x65\x52\x75\154\x65\x20\x5e\56\x2a\x77\160\x2d\151\x6e\143\154\165\144\x65\x73\57\152\163\57\x74\x69\x6e\171\x6d\x63\x65\57\154\x61\x6e\147\163\x2f\56\x2b\x5c\x2e\160\150\x70\x20\x2d\x20\133\106\x2c\114\x5d" . PHP_EOL;
goto OYObF;
uQKae:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto JsNZB;
}
goto zEaEQ;
Blz0T:
$rules .= "\x23\x53\x45\122\x56\105\122\137\116\x4f\x44\111\122\105\103\x54\101\103\103\105\123\x53\x53\111\116\x43\x4c\125\104\x45\x5f\105\116\104" . PHP_EOL;
goto aoPe3;
AwJJc:
$rules .= "\x52\145\167\x72\151\x74\145\122\165\154\145\40\x5e\56\x2a\167\160\55\x69\156\143\x6c\165\144\x65\163\57\133\x5e\x2f\135\x2b\x5c\x2e\160\150\x70\44\40\x2d\40\133\x46\x2c\114\x5d" . PHP_EOL;
goto eOJcy;
GjF1_:
return false;
goto bkb3f;
uTISK:
Fn8_h:
goto d8ddK;
sGCkC:
$rules = "\43\x53\105\122\x56\105\x52\137\116\117\104\x49\x52\x45\x43\x54\101\103\103\105\x53\x53\x53\x49\x4e\103\x4c\x55\x44\105\x5f\123\x54\101\122\124" . PHP_EOL;
goto qZeNh;
pPk8N:
fGR4Y:
goto gKGR0;
qZeNh:
$rules .= "\x3c\x49\x66\115\x6f\x64\x75\x6c\x65\x20\155\x6f\144\137\x72\x65\x77\x72\x69\x74\x65\x2e\143\x3e" . PHP_EOL;
goto iDVZJ;
bkb3f:
wi0ff:
goto oEUF1;
FOcAM:
Wse2k:
goto uTISK;
aoPe3:
$home_path = get_home_path();
goto dkTjr;
IvtJW:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto sGCkC;
cysaq:
goto Fn8_h;
goto yn3b2;
EuDdD:
$home_path = get_home_path();
goto MfaWH;
GRBWO:
goto wi0ff;
goto NQRUk;
CBDa3:
$rules .= "\x52\x65\x77\x72\151\164\145\122\165\x6c\145\40\136\56\x2a\167\x70\x2d\x61\144\155\151\156\x2f\x69\156\x63\x6c\165\144\145\163\57\40\x2d\40\133\x46\54\114\135" . PHP_EOL;
goto A9_IU;
M5eJx:
z0eka:
goto ZZVNi;
OFTqa:
p2JM2:
goto cqCpF;
wZwW5:
if ($lines != false) {
goto vj7iQ;
}
goto pe46y;
u2SlS:
$rules .= "\x3c\57\x49\x66\115\x6f\x64\x75\x6c\x65\x3e" . PHP_EOL;
goto Blz0T;
DOa4L:
V_PD3:
goto IvtJW;
gKGR0:
return false;
goto FOcAM;
kU3jA:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto fGR4Y;
}
goto A5Ztm;
vSKw5:
$lines = $this->readhtaccess("\x23\x53\105\x52\x56\105\x52\x5f\x4e\117\104\x49\122\x45\x43\x54\x41\x43\103\x45\123\123\123\x49\116\103\x4c\125\x44\105\137\123\124\x41\x52\x54", "\43\123\105\x52\126\105\122\137\116\x4f\104\x49\x52\x45\x43\x54\x41\x43\x43\105\123\x53\123\111\x4e\x43\114\125\104\x45\137\x45\116\104");
goto wZwW5;
W9QOY:
goto Wse2k;
goto pPk8N;
yn3b2:
vj7iQ:
goto EuDdD;
UDWct:
if ($mode == 1) {
goto p2JM2;
}
goto vSKw5;
MfaWH:
$htaccess_file = $home_path . "\x2e\x68\x74\141\143\x63\x65\163\163";
goto kU3jA;
oEUF1:
PVX4b:
goto M5eJx;
cqCpF:
$lines = $this->readhtaccess("\43\x53\105\x52\126\105\x52\x5f\116\117\x44\x49\x52\105\x43\x54\101\103\103\x45\123\123\x53\x49\x4e\x43\x4c\x55\x44\x45\137\123\x54\101\x52\x54", "\x23\x53\105\x52\126\x45\122\137\x4e\x4f\x44\111\122\105\103\124\101\103\103\x45\x53\123\x53\x49\116\103\114\x55\104\105\137\105\116\104");
goto C6JoX;
M7bld:
goto PVX4b;
goto DOa4L;
A9_IU:
$rules .= "\122\x65\167\x72\151\164\x65\122\x75\x6c\145\40\x21\136\x2e\x2a\167\160\x2d\151\x6e\x63\x6c\x75\x64\145\163\57\x20\x2d\40\133\123\75\63\135" . PHP_EOL;
goto AwJJc;
dkTjr:
$htaccess_file = $home_path . "\56\x68\164\141\x63\143\x65\x73\x73";
goto uQKae;
NQRUk:
JsNZB:
goto GjF1_;
pe46y:
return false;
goto cysaq;
OYObF:
$rules .= "\122\145\x77\162\151\x74\x65\x52\165\154\145\40\136\56\x2a\x77\160\55\x69\156\x63\154\x75\144\x65\163\57\x74\x68\145\x6d\145\55\143\x6f\155\x70\x61\x74\57\40\55\40\x5b\x46\x2c\114\135" . PHP_EOL;
goto u2SlS;
Z_tz1:
return false;
goto M7bld;
A5Ztm:
return true;
goto W9QOY;
C6JoX:
if ($lines != false) {
goto V_PD3;
}
goto Z_tz1;
d8ddK:
goto z0eka;
goto OFTqa;
iDVZJ:
$rules .= "\122\145\167\162\x69\164\x65\105\156\x67\151\156\x65\40\x4f\156" . PHP_EOL;
goto CBDa3;
ZZVNi:
}
public function security_nouploadfolderphp($mode)
{
goto BbY25;
MmQhS:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto enavJ;
}
goto bh9IK;
Vxg7E:
goto I7Rgg;
goto ZxAQD;
bZq09:
return true;
goto AaXpe;
mfW8s:
$rules .= "\x3c\x49\146\x4d\x6f\144\165\x6c\x65\x20\155\157\x64\x5f\162\145\x77\162\x69\x74\145\x2e\143\76" . PHP_EOL;
goto BlIHZ;
QdD6X:
pONWE:
goto IET1b;
WiiYe:
iTIFK:
goto WjYix;
JI7eY:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto af3Bx;
TPagz:
if ($lines != false) {
goto fZm6j;
}
goto i11dC;
Q0ihx:
return false;
goto jDtKK;
jdquP:
$lines = $this->readhtaccess("\x23\123\x45\122\126\105\x52\x5f\x4e\117\x55\120\114\x4f\x41\x44\106\x4f\114\x44\x45\x52\120\x48\x50\137\123\124\x41\122\x54", "\43\x53\x45\122\126\105\122\x5f\x4e\117\125\120\x4c\117\101\104\106\x4f\x4c\104\105\122\120\110\120\x5f\105\116\x44");
goto K__uy;
af3Bx:
$rules = "\x23\123\105\x52\x56\x45\122\x5f\x4e\117\x55\x50\x4c\117\101\104\x46\117\x4c\104\105\x52\x50\x48\120\137\123\x54\101\x52\124" . PHP_EOL;
goto mfW8s;
WjYix:
$lines = $this->readhtaccess("\x23\x53\105\x52\126\x45\x52\137\116\x4f\125\120\x4c\117\101\104\106\x4f\114\x44\x45\x52\x50\110\120\x5f\x53\x54\101\x52\x54", "\x23\x53\x45\x52\126\x45\122\137\x4e\117\125\120\114\117\101\104\106\x4f\114\104\x45\x52\120\110\120\137\105\x4e\104");
goto TPagz;
wvWmY:
$rules .= "\122\145\167\x72\151\164\145\122\x75\154\x65\x20\x5e\x2e\52\x77\160\55\143\x6f\x6e\164\x65\156\x74\x2f\165\x70\154\x6f\141\x64\163\57\x2e\x2a\134\x2e\160\x68\160\56\52\44\x20\55\x20\x5b\x46\54\114\135" . PHP_EOL;
goto oKI6F;
i28iC:
$htaccess_file = $home_path . "\x2e\x68\164\141\143\x63\145\163\163";
goto EbX1g;
ZxAQD:
dGoYP:
goto jC4H8;
jC4H8:
$home_path = get_home_path();
goto i28iC;
bh9IK:
return true;
goto oTE2T;
CxFVN:
return false;
goto QdD6X;
LZSS_:
I7Rgg:
goto GG07n;
AaXpe:
goto oxnGl;
goto z7130;
EbX1g:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto T412j;
}
goto bZq09;
K__uy:
if ($lines != false) {
goto dGoYP;
}
goto AO0Ls;
wVyVQ:
DxYCh:
goto igpF1;
oKI6F:
$rules .= "\x3c\x2f\111\146\115\x6f\x64\165\x6c\145\x3e" . PHP_EOL;
goto bWIt9;
jDtKK:
oxnGl:
goto LZSS_;
BlIHZ:
$rules .= "\122\x65\x77\x72\151\164\x65\105\156\x67\x69\x6e\x65\x20\x4f\x6e" . PHP_EOL;
goto wvWmY;
rW8iB:
enavJ:
goto CxFVN;
oTE2T:
goto pONWE;
goto rW8iB;
H11GZ:
fZm6j:
goto JI7eY;
z7130:
T412j:
goto Q0ihx;
skyTN:
goto yAAvL;
goto H11GZ;
IET1b:
yAAvL:
goto wVyVQ;
AO0Ls:
return false;
goto Vxg7E;
bWIt9:
$rules .= "\43\x53\105\122\x56\105\x52\137\116\117\125\x50\x4c\117\x41\104\x46\x4f\x4c\x44\105\x52\120\110\x50\x5f\x45\x4e\104" . PHP_EOL;
goto nQTEb;
BbY25:
if ($mode == 1) {
goto iTIFK;
}
goto jdquP;
tAwCf:
$htaccess_file = $home_path . "\x2e\x68\x74\x61\143\x63\x65\163\163";
goto MmQhS;
i11dC:
return false;
goto skyTN;
nQTEb:
$home_path = get_home_path();
goto tAwCf;
GG07n:
goto DxYCh;
goto WiiYe;
igpF1:
}
public function security_nobadquery($mode)
{
goto ApG8d;
QbDle:
return true;
goto X9t3a;
avXP4:
$rules .= "\x52\x65\167\x72\x69\x74\145\103\157\x6e\144\x20\45\x7b\x51\125\x45\x52\x59\137\x53\124\x52\111\x4e\107\175\x20\50\73\x7c\x25\62\62\174\45\63\x44\x7c\45\x32\x37\51\56\x2a\x28\163\145\154\x65\143\x74\x7c\x69\x6e\x73\x65\162\164\174\165\156\151\157\x6e\174\144\145\x63\154\x61\162\145\x7c\x64\162\x6f\x70\51\40\x5b\116\103\135" . PHP_EOL;
goto VSING;
WJiiL:
$rules .= "\74\x49\x66\115\x6f\144\x75\154\x65\x20\155\157\144\137\x72\x65\x77\162\x69\164\145\56\143\76" . PHP_EOL;
goto pLcKu;
l0YiC:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto hnerO;
}
goto QbDle;
tQg7Z:
q2cPS:
goto TgNAI;
X9t3a:
goto KQ6oW;
goto n_t4Z;
pLcKu:
$rules .= "\x52\x65\167\162\x69\164\x65\105\156\147\x69\x6e\x65\x20\x4f\x6e" . PHP_EOL;
goto IwQ1p;
xO3mv:
$htaccess_file = $home_path . "\x2e\150\x74\x61\x63\x63\145\163\x73";
goto ECKli;
yMccC:
if ($lines != false) {
goto rAH7A;
}
goto Ep5eK;
fSEEd:
goto q2cPS;
goto EfSPt;
nPG2R:
rAH7A:
goto EYvYF;
CMhja:
O8eDh:
goto fSEEd;
Ep5eK:
return false;
goto MYSp1;
knj0_:
goto Vf73M;
goto UGn3Q;
IwQ1p:
$rules .= "\122\145\x77\x72\x69\164\x65\103\157\156\x64\x20\x25\173\121\125\105\x52\131\x5f\123\124\122\111\116\x47\x7d\40\x5e\x2e\52\50\x65\166\x61\x6c\134\x28\174\x6a\141\x76\x61\x73\143\162\151\x70\164\174\x62\x61\163\145\66\64\x5f\174\x47\x4c\x4f\x42\101\x4c\123\134\133\x7c\x52\x45\121\125\x45\x53\124\134\x5b\x7c\x3c\x73\143\x72\x69\x70\164\x7c\x25\x33\x43\x73\x63\x72\151\160\164\51\x2e\52\x20\x5b\x4e\103\x2c\x4f\x52\x5d" . PHP_EOL;
goto avXP4;
nKnrR:
$rules = "\x23\123\x45\122\126\105\x52\x5f\116\x4f\x42\101\x44\121\x55\105\122\x59\137\x53\x54\101\122\124" . PHP_EOL;
goto WJiiL;
ApG8d:
if ($mode == 1) {
goto xk3B1;
}
goto dF5hr;
LEwDe:
$lines = $this->readhtaccess("\x23\x53\105\122\126\105\122\137\116\x4f\x42\101\104\x51\125\x45\x52\x59\x5f\123\124\x41\122\x54", "\x23\x53\x45\x52\126\x45\122\137\x4e\117\x42\101\x44\x51\125\105\122\131\137\x45\116\x44");
goto yMccC;
UpymF:
$htaccess_file = $home_path . "\56\x68\x74\x61\143\143\x65\163\163";
goto l0YiC;
wANsj:
$rules .= "\x23\x53\x45\122\126\x45\122\x5f\116\117\102\101\104\x51\125\105\122\x59\137\105\x4e\x44" . PHP_EOL;
goto yZSEJ;
VJEEM:
$rules .= "\74\x2f\x49\x66\x4d\x6f\x64\x75\x6c\145\76" . PHP_EOL;
goto wANsj;
MYSp1:
goto IqOre;
goto nPG2R;
dF5hr:
$lines = $this->readhtaccess("\x23\x53\105\x52\x56\x45\122\x5f\116\117\x42\101\x44\121\x55\105\122\x59\x5f\123\x54\x41\x52\124", "\x23\123\x45\x52\x56\x45\x52\x5f\116\x4f\102\x41\x44\x51\125\105\x52\x59\x5f\x45\116\104");
goto nYEF6;
iLpPq:
return false;
goto Nvg73;
vfUm8:
return false;
goto RMiT0;
IbJXX:
return true;
goto knj0_;
n_t4Z:
hnerO:
goto iLpPq;
EYvYF:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto nKnrR;
LQoQI:
Vf73M:
goto CMhja;
EfSPt:
xk3B1:
goto LEwDe;
MRNlX:
asJqv:
goto VpMrE;
ECKli:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto CjHJ6;
}
goto IbJXX;
nYEF6:
if ($lines != false) {
goto asJqv;
}
goto vfUm8;
UGn3Q:
CjHJ6:
goto ApvR8;
LS7OW:
IqOre:
goto tQg7Z;
yZSEJ:
$home_path = get_home_path();
goto UpymF;
VpMrE:
$home_path = get_home_path();
goto xO3mv;
ApvR8:
return false;
goto LQoQI;
Nvg73:
KQ6oW:
goto LS7OW;
VSING:
$rules .= "\122\145\167\162\151\164\145\x52\165\154\x65\40\x5e\50\56\52\51\44\x20\x2d\40\x5b\106\54\x4c\x5d" . PHP_EOL;
goto VJEEM;
RMiT0:
goto O8eDh;
goto MRNlX;
TgNAI:
}
}
goto Rogh4;
uA7jX:
$dangeraccess = true;
goto DFKEF;
c0P0o:
function wpinfecscanner_disable_xmlrpc_pingback_methods($methods)
{
goto jfZxr;
FM1Ra:
return $methods;
goto Zl_oZ;
h6a0x:
unset($methods["\x70\x69\x6e\x67\142\x61\143\153\x2e\160\151\156\x67"]);
goto b0Z_j;
JsGiz:
if (!($security_nopingback == 1)) {
goto BFxoL;
}
goto h6a0x;
jfZxr:
global $mysecurytysetting;
goto GvD6A;
b0Z_j:
unset($methods["\x70\x69\156\147\x62\x61\x63\x6b\56\145\170\x74\x65\156\x73\x69\x6f\x6e\x73\56\x67\x65\x74\x50\x69\156\x67\142\141\143\x6b\163"]);
goto s7vyM;
Pf3D2:
HFl4M:
goto FM1Ra;
s7vyM:
BFxoL:
goto Pf3D2;
GvD6A:
if (!$mysecurytysetting) {
goto HFl4M;
}
goto en2nB;
en2nB:
$security_nopingback = $mysecurytysetting->security_nopingback;
goto JsGiz;
Zl_oZ:
}
goto KRGQp;
hVwsl:
function wpinfecscanner_security_loginlockdown()
{
goto LkqZU;
EZPZw:
if (!($security_loginlockdown == 1)) {
goto g7Wd4;
}
goto g2sCy;
g2sCy:
add_action("\167\160\137\154\x6f\147\x69\x6e\x5f\x66\141\x69\x6c\145\x64", "\167\160\151\x6e\146\145\143\x73\x63\141\x6e\x6e\145\x72\x5f\163\145\x63\x75\x72\151\x74\x79\146\141\x69\x6c\x65\144\137\x6c\157\147\151\156");
goto vReqq;
LkqZU:
global $mysecurytysetting;
goto jAePL;
vReqq:
add_action("\x6c\157\x67\x69\156\137\151\156\151\x74", "\167\160\x69\x6e\x66\x65\x63\x73\143\141\156\x6e\x65\x72\137\x73\x65\x63\x75\x72\151\x74\x79\137\153\x69\154\x6c\137\154\157\x67\151\156");
goto t8uty;
jAePL:
if (!$mysecurytysetting) {
goto lwv6h;
}
goto Kvq4R;
Kvq4R:
$security_loginlockdown = $mysecurytysetting->security_loginlockdown;
goto EZPZw;
t8uty:
add_action("\167\160\x5f\x6c\157\147\151\156", "\x77\160\151\x6e\x66\145\x63\163\143\x61\x6e\x6e\x65\162\137\163\x65\143\165\162\151\164\171\163\x75\x63\x63\145\163\x73\x66\x75\x6c\137\x6c\157\147\151\x6e");
goto c0Brl;
c0Brl:
g7Wd4:
goto tJDl8;
tJDl8:
lwv6h:
goto whodn;
whodn:
}
goto KPacB;
bSzlQ:
if (!(wpinfec_security_get_ip() && $dangeraccess)) {
goto zEeBV;
}
goto wzbFM;
ca_m9:
exit;
goto sK0rK;
gOiji:
function wp_loginadmin_function($login)
{
goto pFzLZ;
vjKpB:
set_transient("\141\162\143\150\151\x76\145\x5f\151\160\x6c\157\147\151\x6e" . $ip . "\x5f" . $today, true, 60 * 60 * 24 * 30);
goto qSurd;
pFzLZ:
if ($ip = wpinfec_security_get_ip()) {
goto Wro7p;
}
goto hw0I9;
hw0I9:
return;
goto FhPNo;
qSurd:
vq8Cf:
goto FMhkQ;
FhPNo:
Wro7p:
goto z5Csc;
OOxMm:
date_default_timezone_set(get_option("\x74\151\x6d\145\x7a\x6f\x6e\x65\137\x73\164\x72\x69\156\147"));
goto npOd7;
Pq_4W:
if (!(strpos(implode("\54\x20", $user->roles), "\x61\x64\155\151\x6e\x69\x73\x74\x72\x61\164\157\162") !== false)) {
goto vq8Cf;
}
goto OOxMm;
npOd7:
$today = date("\x59\x2d\155\x2d\x64\x5f\110");
goto vjKpB;
z5Csc:
$user = get_user_by("\154\157\x67\x69\x6e", $login);
goto Pq_4W;
FMhkQ:
}
goto gveSd;
l3zQp:
function wpinfecscanner_security_wphideversion()
{
goto LI03l;
HN0S7:
if (!($security_wphideversion == 1 || $security_nowpscan == 1)) {
goto WhgQg;
}
goto a3GA7;
LI03l:
global $mysecurytysetting;
goto VRWSX;
HlUeo:
$security_nowpscan = $mysecurytysetting->security_nowpscan;
goto HN0S7;
Wk5BQ:
WhgQg:
goto y6AL5;
VRWSX:
if (!$mysecurytysetting) {
goto KCoOw;
}
goto JwGll;
kVBQh:
add_filter("\163\143\x72\x69\x70\x74\x5f\x6c\157\141\x64\145\162\137\x73\162\143", "\163\150\141\x70\x65\x53\x70\141\x63\145\x5f\162\145\155\157\x76\145\137\166\x65\x72\x73\151\157\x6e\x5f\x73\x63\162\151\160\x74\163\137\x73\x74\x79\154\145\x73", 9999);
goto xYTqX;
y6AL5:
KCoOw:
goto Gus3n;
JwGll:
$security_wphideversion = $mysecurytysetting->security_wphideversion;
goto HlUeo;
jX_CY:
remove_action("\x77\x70\x5f\150\x65\x61\144", "\x77\x70\x5f\x67\145\x6e\145\162\x61\164\157\x72");
goto Wk5BQ;
a3GA7:
add_filter("\163\x74\x79\x6c\145\137\154\x6f\141\x64\145\162\x5f\163\x72\x63", "\x73\x68\x61\x70\x65\x53\x70\141\x63\145\137\162\x65\x6d\x6f\x76\x65\x5f\166\145\162\x73\x69\157\156\137\x73\x63\x72\151\160\164\x73\x5f\x73\x74\171\x6c\x65\x73", 9999);
goto kVBQh;
xYTqX:
add_filter("\164\150\x65\x5f\147\145\156\145\x72\x61\x74\157\x72", "\137\x5f\162\145\x74\165\x72\156\x5f\x65\155\160\x74\171\137\163\164\x72\x69\x6e\x67");
goto jX_CY;
Gus3n:
}
goto rseW0;
pW8UP:
function wpinfecscanner_security_pwresetcapture()
{
goto Sa1UL;
ooD8N:
XcccV:
goto gSUiL;
E5O6T:
if (!$mysecurytysetting) {
goto cOUbn;
}
goto lVanJ;
pjqJU:
if (!($security_pwresetcaptcha == 1)) {
goto XcccV;
}
goto NkJae;
Tna2Q:
add_filter("\x6c\157\163\164\160\141\163\163\x77\157\x72\144\137\160\x6f\x73\164", "\127\120\x69\156\x66\x65\x63\x73\143\141\156\156\x65\162\x5f\103\141\x70\x74\143\150\141\137\x50\127\x52\145\x73\145\164\137\101\x75\164\x68");
goto ooD8N;
eY8nx:
add_action("\154\157\x73\x74\x70\141\x73\163\x77\157\x72\144\137\146\157\162\x6d", "\127\x50\151\x6e\x66\145\x63\x73\143\141\x6e\x6e\x65\x72\x5f\103\x61\x70\x74\x63\x68\141\137\120\127\122\x65\163\x65\x74\x5f\106\x69\145\154\x64");
goto Tna2Q;
NkJae:
session_start();
goto eY8nx;
Sa1UL:
global $mysecurytysetting;
goto E5O6T;
gSUiL:
cOUbn:
goto Jnjgn;
lVanJ:
$security_pwresetcaptcha = $mysecurytysetting->security_pwresetcaptcha;
goto pjqJU;
Jnjgn:
}
goto AOU32;
Skjt0:
function wpinfectsecurity_new_login_url($scheme = null)
{
goto Ts4gA;
Nq9xa:
rfDGQ:
goto ZdGdj;
vd7sw:
goto rfDGQ;
goto dYxET;
s1B_e:
if (get_option("\x70\145\x72\x6d\x61\x6c\x69\x6e\x6b\137\x73\x74\x72\165\x63\164\x75\x72\145")) {
goto EKvUG;
}
goto g8lGO;
dYxET:
EKvUG:
goto r9hYN;
Ts4gA:
$loginurl = get_option("\167\160\151\x6e\146\145\143\x74\x73\143\141\x6e\x6e\x65\x72\137\x6c\x6f\147\x69\x6e\x75\x72\154");
goto s1B_e;
g8lGO:
return home_url("\57", $scheme) . "\x3f" . $loginurl;
goto vd7sw;
r9hYN:
return site_url("\x2f", $scheme) . $loginurl;
goto Nq9xa;
ZdGdj:
}
goto quFk3;
IecQ_:
function wpinfectsecurity_show_wp_filesystem_status($name, $path, $recommended)
{
goto XEU69;
Ef2n7:
$fix = true;
goto QJ2A6;
tu6O4:
T_h4r:
goto svDBg;
svDBg:
pM3HC:
goto v4J1V;
BXqqy:
h_OsC:
goto eu7ic;
xxdEp:
GQRN6:
goto eMtCm;
fx9Vj:
if ($res) {
goto h_OsC;
}
goto P1BiB;
eu7ic:
$trmystyle = "\x73\164\171\154\x65\x3d\x27\x62\141\143\153\x67\162\x6f\165\156\x64\55\x63\157\154\157\162\x3a\43\70\67\103\105\x46\x41\x27";
goto ZMEwW;
aHD3D:
goto pM3HC;
goto i1Vm3;
ffg8Y:
echo "\x3c\x74\144\76" . ltrim($recommended, "\60") . "\x3c\57\x74\144\76";
goto gkCtX;
ztdQ5:
$trmystyle = "\x73\164\x79\154\x65\75\x27\x62\x61\143\x6b\x67\162\x6f\x75\x6e\144\55\143\x6f\154\x6f\162\x3a\x23\x38\x37\103\105\x46\101\47";
goto vh0R7;
gkCtX:
echo "\74\57\x74\x72\76";
goto VlWee;
ZMEwW:
$fix = false;
goto tu6O4;
bgfG5:
cIJ93:
goto cGvb_;
meUNa:
if ($configmod != $recommended) {
goto NgJtJ;
}
goto ztdQ5;
x6QMM:
$fix = true;
goto xxdEp;
nStsT:
if ($configmod == "\60\67\67\67") {
goto cIJ93;
}
goto meUNa;
XEU69:
$fix = false;
goto mTUQV;
IyH8w:
$res = wpinfectsecurity_is_file_permission_secure($recommended, $configmod);
goto fx9Vj;
aPUP5:
echo "\74\x74\144\x3e" . ltrim($configmod, "\x30") . "\x3c\x2f\164\x64\76";
goto ffg8Y;
mTUQV:
$configmod = wpinfectsecurity_get_file_permission($path);
goto nStsT;
cGvb_:
$trmystyle = "\x73\x74\171\154\x65\x3d\47\x62\141\143\153\x67\162\157\x75\156\x64\55\143\157\154\157\x72\72\43\x46\106\x42\66\x43\x31\x27";
goto x6QMM;
vh0R7:
$fix = false;
goto aHD3D;
eMtCm:
echo "\x3c\x74\162\x20" . $trmystyle . "\76";
goto N3M_u;
VlWee:
return $fix;
goto dShby;
N3M_u:
echo "\x3c\x74\144\x3e" . $name . "\x3c\x2f\164\x64\x3e";
goto aPUP5;
QJ2A6:
goto T_h4r;
goto BXqqy;
P1BiB:
$trmystyle = "\x73\x74\x79\x6c\145\x3d\47\142\x61\143\153\x67\x72\x6f\165\x6e\144\55\x63\x6f\154\157\162\72\x23\x46\x46\x46\101\x43\x44\x27";
goto Ef2n7;
i1Vm3:
NgJtJ:
goto IyH8w;
v4J1V:
goto GQRN6;
goto bgfG5;
dShby:
}
goto KfD7H;
Wc8Fi:
if (!(strpos($r, "\x78\x6d\x6c\x72\x70\x63\x2e\160\x68\x70") !== false)) {
goto vDH6O;
}
goto CUo_k;
rseW0:
add_action("\151\156\x69\x74", "\x77\x70\151\x6e\x66\145\x63\163\x63\141\156\156\x65\162\x5f\x73\145\143\165\x72\x69\x74\x79\137\x77\x70\150\x69\x64\145\166\x65\x72\163\x69\x6f\156");
goto SzRos;
fSamz:
function wpinfecscanner_securityfailed_login()
{
goto zZTnx;
plIbB:
wpinfec_security_inc_count($ip);
goto AmkAK;
btD59:
return;
goto k2k8c;
zZTnx:
if ($ip = wpinfec_security_get_ip()) {
goto TE_4W;
}
goto btD59;
k2k8c:
TE_4W:
goto plIbB;
AmkAK:
}
goto lmLln;
RXlv4:
@ini_set("\145\x72\x72\157\x72\x5f\162\145\160\x6f\162\164\151\x6e\x67", 0);
goto QV0fd;
vZTaA:
W5aFm:
goto RqnU9;
hM6AU:
function WPinfecscanner_Captcha_Login_Field()
{
goto pLcyG;
hsbUc:
$_SESSION["\x77\160\x69\x6e\x66\x65\143\164\163\143\141\x6e\x6e\145\162\137\x61\x75\x74\150\x5f\x68\x61\163\x68"] = md5((string) ($number1 + $number2));
goto frhgs;
hm17t:
$output = "\x3c\151\x6d\147\x20\x73\162\x63\x3d\x27\144\x61\164\x61\x3a\151\x6d\141\x67\145\x2f\152\x70\145\147\x3b\142\141\x73\x65\66\x34\x2c" . base64_encode($rawImageBytes) . "\47\40\x2f\76";
goto lWgR3;
J8vJd:
_e("\x50\154\x65\141\163\145\40\145\156\x74\x65\162\40\164\x68\x65\40\162\x65\x73\165\x6c\164\40\x6f\x66\x20\x74\150\145\40\x63\x61\x6c\x63\x75\154\141\x74\x69\x6f\x6e\40\141\x62\157\166\145\x2e", "\167\160\x69\x6e\146\145\x63\163\x63\141\156");
goto C9R0e;
jJzjl:
f3JZf:
goto hJELO;
RU4PB:
imagejpeg($my_img, NULL, 100);
goto k3DjF;
k3DjF:
$rawImageBytes = ob_get_clean();
goto hm17t;
vvtdF:
$background = imagecolorallocate($my_img, 255, 255, 255);
goto wVzS4;
q4LxL:
$number1 = rand(99, 999);
goto wsLPe;
WcIp2:
$text = $question;
goto vY4GH;
D6BSq:
echo "\x20\40\40\x20\x9\x3c\x70\76\74\x6c\x61\142\145\x6c\x3e";
goto AeU1a;
sASTk:
echo "\40\x3c\x62\162\x3e\74\x73\155\141\x6c\154\x3e";
goto J8vJd;
QieBj:
goto TNMBL;
goto jJzjl;
AeU1a:
echo $output;
goto sASTk;
lWgR3:
TNMBL:
goto D6BSq;
N14UB:
ob_start();
goto RU4PB;
hJELO:
$my_img = imagecreate(200, 25);
goto vvtdF;
wsLPe:
$number2 = rand(1, 4);
goto hsbUc;
vY4GH:
if (extension_loaded("\147\144")) {
goto f3JZf;
}
goto Yym3v;
C9R0e:
echo "\74\x2f\x73\x6d\141\154\154\76\74\x62\162\76\74\151\156\160\x75\164\40\151\144\x3d\x22\167\x70\x69\x73\137\x63\141\x70\164\143\150\x61\137\154\157\x67\x69\x6e\x22\x20\164\x79\160\145\75\x22\x74\x65\x78\164\x22\40\166\x61\154\x75\145\75\42\42\x20\156\141\155\145\75\42\167\x70\151\x73\x5f\143\141\160\x74\x63\x68\x61\x5f\x6c\x6f\x67\x69\x6e\x22\76\x3c\x2f\154\141\142\x65\154\76\74\x2f\160\76\15\12\x20\40\x20\40";
goto ZhOZP;
frhgs:
$question = $number1 . "\40\53\x20" . $number2 . "\40\x3d\x20";
goto WcIp2;
Yym3v:
$output = $question;
goto QieBj;
IKM_o:
imagestring($my_img, 4, 2, 4, $text, $text_colour);
goto N14UB;
pLcyG:
ob_start();
goto q4LxL;
wVzS4:
$text_colour = imagecolorallocate($my_img, 0, 0, 0);
goto IKM_o;
ZhOZP:
echo ob_get_clean();
goto ef9p2;
ef9p2:
}
goto TiZtp;
ZAYKt:
function WPinfecscanner_Captcha_Comment_Field($content)
{
goto LaNCB;
GsNkD:
echo "\x3c\x2f\163\x6d\x61\154\x6c\x3e\74\142\162\x3e\x3c\151\156\x70\x75\164\x20\151\144\x3d\42\x77\160\151\156\x66\145\x63\x74\x73\143\141\156\x5f\143\x61\x70\164\x63\150\141\x5f\x63\x6f\x6d\155\x65\156\x74\x22\x20\x74\x79\160\145\75\x22\x74\x65\x78\164\42\x20\x76\141\154\165\145\x3d\42\x22\40\x6e\x61\155\145\75\42\167\160\x69\156\146\145\x63\164\x73\x63\x61\156\137\x63\141\x70\x74\x63\x68\141\137\x63\157\155\x6d\x65\x6e\x74\x22\76\74\x2f\x70\x3e\15\12\40\40\40\x20";
goto ruz_B;
QSQJc:
ob_end_clean();
goto em8ny;
zbu41:
ob_start();
goto NfBNb;
A49mO:
$rawImageBytes = ob_get_clean();
goto BTE1B;
mVa5r:
$text_colour = imagecolorallocate($my_img, 0, 0, 0);
goto uT0Yb;
RYbLw:
echo $output;
goto jPFmv;
em8ny:
return $content . $captcha;
goto pcVal;
rdlx9:
l90sl:
goto RSwGU;
oaSLB:
$background = imagecolorallocate($my_img, 255, 255, 255);
goto mVa5r;
LaNCB:
$number1 = rand(99, 999);
goto ZKW81;
uT0Yb:
imagestring($my_img, 4, 2, 4, $text, $text_colour);
goto tp4te;
wx2LB:
if (extension_loaded("\x67\x64")) {
goto l90sl;
}
goto UIhkK;
L8R0S:
PD8A1:
goto zbu41;
ZKW81:
$number2 = rand(1, 4);
goto VA3jV;
abaLT:
imagejpeg($my_img, NULL, 100);
goto A49mO;
aqN8t:
_e("\x50\154\x65\141\x73\x65\40\145\x6e\164\x65\x72\x20\x74\x68\x65\x20\x72\145\163\165\x6c\164\40\x6f\146\40\164\x68\x65\x20\x63\x61\x6c\143\x75\x6c\x61\x74\x69\157\x6e\40\x61\142\157\166\145\56", "\x77\x70\x69\156\146\x65\x63\x73\143\x61\156");
goto GsNkD;
ezjzX:
$text = $question;
goto wx2LB;
ruz_B:
$captcha = ob_get_contents();
goto QSQJc;
BTE1B:
$output = "\x3c\151\x6d\x67\40\163\x72\x63\75\x27\144\141\x74\x61\72\151\x6d\141\x67\145\x2f\152\x70\145\147\73\x62\x61\x73\145\66\x34\x2c" . base64_encode($rawImageBytes) . "\x27\40\x2f\76";
goto L8R0S;
UIhkK:
$output = $question;
goto hEAY1;
jPFmv:
echo "\74\x2f\x6c\x61\142\x65\x6c\76\x3c\142\x72\x3e\74\x73\155\x61\154\x6c\76";
goto aqN8t;
hEAY1:
goto PD8A1;
goto rdlx9;
VA3jV:
$_SESSION["\x77\x70\151\156\146\145\x63\164\163\x63\141\156\156\x65\x72\137\143\157\155\x6d\145\156\164\141\x75\164\150\137\x68\x61\163\150"] = md5((string) ($number1 + $number2));
goto BAxK9;
tp4te:
ob_start();
goto abaLT;
RSwGU:
$my_img = imagecreate(200, 25);
goto oaSLB;
BAxK9:
$question = $number1 . "\40\x2b\x20" . $number2 . "\x20\75\40";
goto ezjzX;
NfBNb:
echo "\11\x9\x3c\x70\76\x3c\154\x61\142\145\x6c\x3e";
goto RYbLw;
pcVal:
}
goto Qcv3x;
tKKAO:
function wpinfec_security_get_ip()
{
goto EIkPT;
BIjYM:
return $ip;
goto Zk3cJ;
clS3z:
if (!($ip != false)) {
goto Dlx3t;
}
goto oFESQ;
EIkPT:
$ip = isset($_SERVER["\x52\105\115\x4f\124\105\137\x41\104\x44\122"]) ? $_SERVER["\x52\105\x4d\x4f\x54\105\137\x41\104\104\x52"] : false;
goto clS3z;
MYB9_:
Dlx3t:
goto BIjYM;
oFESQ:
if (!(inet_pton($ip) === false)) {
goto LRpS_;
}
goto qwk3r;
qwk3r:
$ip = false;
goto HpZ7l;
HpZ7l:
LRpS_:
goto MYB9_;
Zk3cJ:
}
goto EEtaP;
CUo_k:
$dangeraccess = true;
goto rLk_W;
cyM2O:
function wpinfec_security_clear_lockdown($ip)
{
delete_transient(wpinfec_security_get_lockdown_key($ip));
}
goto g15D3;
uw5Ts:
add_action("\x77\x70\137\154\157\147\x69\156", "\167\x70\151\156\146\x65\x63\163\x63\x61\x6e\156\x65\162\x5f\x73\x65\143\165\x72\x69\164\x79\163\165\143\x63\145\x73\163\x66\x75\154\137\154\x6f\x67\x69\156\x64\x65\x6c\145\164\145\151\x70");
goto gOiji;
Uxgef:
if (!(strpos($r, "\x77\160\x2d\x63\x6f\155\x6d\145\x6e\164\163\55\160\157\163\x74\x2e\x70\150\x70") !== false)) {
goto zDoRK;
}
goto uA7jX;
BIs3W:
if (!(strpos($r, "\x77\160\55\154\x6f\147\x69\156\56\160\x68\160") !== false)) {
goto W5aFm;
}
goto J6plu;
TiZtp:
function WPinfecscanner_Captcha_Login_Auth($user)
{
goto nZxIu;
SAlGe:
DDzfC:
goto UB3Ly;
PwpXR:
zlFCF:
goto BLDV5;
UB3Ly:
unset($_SESSION["\x77\x70\151\156\x66\145\143\x74\163\x63\141\156\x6e\x65\162\137\141\165\164\x68\137\x68\x61\163\150"]);
goto g2ru7;
f53hR:
jpa9u:
goto IjYPi;
gpwCk:
$total = $_SESSION["\167\x70\151\x6e\x66\x65\x63\x74\x73\x63\x61\156\156\x65\x72\137\141\x75\164\x68\137\x68\x61\163\x68"];
goto qMmLk;
KDfsd:
goto zlFCF;
goto SAlGe;
nZxIu:
if (empty($_POST["\167\x70\151\163\137\143\x61\160\164\143\x68\141\137\154\157\x67\x69\156"])) {
goto jpa9u;
}
goto gpwCk;
qMmLk:
if (md5(trim((string) $_POST["\167\160\x69\163\137\143\141\x70\164\143\x68\x61\137\154\x6f\x67\151\156"])) == $total) {
goto DDzfC;
}
goto rtwM8;
pgB1I:
o2d4G:
goto UdiNX;
IjYPi:
$empty = __("\x50\x6c\x65\141\163\145\x20\x65\156\164\145\x72\x20\x74\x68\145\x20\x63\x61\160\164\143\x68\141\x2e", "\x77\160\x69\156\x66\x65\x63\163\143\x61\156");
goto uWdsS;
CDGci:
wp_die($error_message);
goto KDfsd;
uWdsS:
wp_die($empty);
goto pgB1I;
g2ru7:
return $user;
goto PwpXR;
BLDV5:
goto o2d4G;
goto f53hR;
rtwM8:
$error_message = __("\x49\156\x63\x6f\162\162\145\143\164\40\x76\141\x6c\x75\x65\40\x6f\x66\40\x74\157\164\x61\x6c\40\143\141\160\x74\x63\150\141", "\167\x70\x69\x6e\x66\145\143\163\143\141\156");
goto CDGci;
UdiNX:
}
goto zgtXQ;
XI__2:
@error_reporting(0);
goto RXlv4;
RqnU9:
if (!(strpos($r, "\167\160\x2d\x6c\157\147\151\x6e") !== false)) {
goto VU9gT;
}
goto yxjNR;
U7Atl:
add_action("\x69\x6e\151\x74", "\x77\x70\151\x6e\146\x65\143\x73\143\141\156\156\x65\162\137\x73\x65\x63\165\x72\151\x74\171\137\151\160\x6c\157\143\x6b\144\157\x77\x6e\x73\x65\x74");
goto uw5Ts;
PY_U2:
uy7Lp:
goto LLXkS;
L8Soc:
if (!(preg_match("\57\154\x6f\147\151\x6e\44\x2f", $r) || preg_match("\x2f\154\157\147\151\156\x5c\57\x24\57", $r))) {
goto Fq3xg;
}
goto Mqzj9;
psAJf:
add_action("\x69\156\151\x74", "\x77\x70\x69\156\x66\145\143\x73\x63\141\x6e\x6e\x65\x72\x5f\163\x65\143\x75\162\x69\164\x79\x5f\x69\160\x62\154\x6f\143\153");
goto hRAhm;
EEtaP:
function wpinfec_security_get_count($ip)
{
goto f9fvO;
Vc2sF:
return absint($c);
goto MbFFi;
MbFFi:
rLTme:
goto lnLOZ;
f9fvO:
if (!($c = get_transient(wpinfec_security_get_key($ip)))) {
goto rLTme;
}
goto Vc2sF;
lnLOZ:
return 0;
goto TEpQK;
TEpQK:
}
goto DCbsK;
DFKEF:
zDoRK:
goto hJgJw;
ejeEI:
add_action("\x69\x6e\151\164", "\x77\160\x69\156\x66\x65\143\x73\x63\x61\156\156\145\x72\137\163\145\143\165\x72\x69\164\171\137\x6e\157\x77\x70\163\143\x61\156");
goto hM6AU;
s7HV4:
zEeBV:
goto ddFQU;
CN231:
Fq3xg:
goto Wc8Fi;
quFk3:
function wpinfecscanner_security_loaded()
{
goto n0AJ5;
LsDD6:
dR0ki:
goto sS8mj;
nC04L:
die;
goto lImaX;
cUxjc:
vVvKS:
goto KmElG;
GVFRm:
wp_die(__("\101\x63\143\x65\163\163\x20\x64\145\156\151\145\x64\x2e", "\167\160\x69\x6e\x66\145\143\x73\x63\141\x6e"));
goto b1EKW;
Pihzg:
wp_die(__("\x41\x63\143\x65\x73\x73\x20\144\x65\156\151\x65\x64\x2e", "\x77\x70\151\x6e\146\145\143\163\x63\141\x6e"));
goto U7Q45;
Zniil:
nocache_headers();
goto ho0rh;
DIn3X:
if (strpos($r, "\x77\160\x2d\x6c\157\x67\x69\x6e\56\x70\150\x70") !== false) {
goto dR0ki;
}
goto CPP9v;
pmC8m:
if (preg_match("\57\x6c\x6f\x67\151\x6e\44\x2f", $r) || preg_match("\x2f\x6c\157\x67\x69\x6e\134\x2f\x24\57", $r)) {
goto N82tk;
}
goto Jc12G;
b1EKW:
goto N2HCW;
goto l2XBQ;
sS8mj:
wp_die(__("\x41\143\143\145\x73\163\40\x64\145\x6e\151\145\144\56", "\167\x70\151\x6e\x66\x65\x63\x73\143\x61\156"));
goto greNn;
uJ0HT:
wp_die(__("\101\143\x63\145\163\x73\40\x64\x65\x6e\151\145\x64\x2e", "\x77\x70\151\156\146\x65\143\163\x63\x61\x6e"));
goto YFaVB;
l2XBQ:
N82tk:
goto Pihzg;
ho0rh:
@(require_once ABSPATH . "\167\x70\x2d\x6c\157\147\x69\x6e\56\160\150\160");
goto nC04L;
nGdLv:
$allurl = (empty($_SERVER["\x48\x54\x54\120\x53"]) ? "\x68\164\x74\x70\x3a\57\x2f" : "\x68\164\x74\160\163\x3a\57\57") . $_SERVER["\110\124\x54\x50\x5f\x48\x4f\x53\x54"] . $r;
goto DIn3X;
KmElG:
global $error, $interim_login, $action, $user_login;
goto Zniil;
pZOWD:
szwAB:
goto GVFRm;
YFaVB:
Veh3Q:
goto vIvOb;
Jc12G:
if (strpos($allurl, wpinfectsecurity_new_login_url()) !== false || strpos($allurl . "\57", wpinfectsecurity_new_login_url()) !== false) {
goto vVvKS;
}
goto ikLDq;
CPP9v:
if (strpos($r, "\167\160\x2d\154\157\x67\151\x6e") !== false) {
goto szwAB;
}
goto pmC8m;
U7Q45:
goto N2HCW;
goto cUxjc;
greNn:
goto N2HCW;
goto pZOWD;
S49ZS:
$request = parse_url($r);
goto nGdLv;
lImaX:
N2HCW:
goto Qa6pZ;
vIvOb:
$r = $_SERVER["\122\x45\121\125\x45\x53\x54\x5f\x55\x52\x49"];
goto S49ZS;
ikLDq:
goto N2HCW;
goto LsDD6;
n0AJ5:
if (!(is_admin() && !is_user_logged_in() && !defined("\x44\117\111\116\x47\x5f\x41\112\x41\x58"))) {
goto Veh3Q;
}
goto uJ0HT;
Qa6pZ:
}
goto I0fmE;
ntY37:
add_action("\x69\x6e\x69\164", "\x77\x70\151\156\146\145\143\x73\143\141\x6e\x6e\145\162\x5f\163\145\143\165\x72\151\164\x79\x5f\151\x70\141\165\164\157\x62\x6c\157\143\x6b");

?>