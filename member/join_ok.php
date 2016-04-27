<?require_once("./join_h.php");?>

	<div class="join_con"><h3>이용약관동의</h3>
	TERRA를 회원가입을 위해서 아래의 개인정보 수집 및 이용에 대한 안내를 읽고 동의해 주세요.</div>
	<div class="join_box">TERRA 운영하는 TERRA RUN은 「개인정보보호법」 및 「정보통신망 이용촉진 및 정보보호 등에 관한 법률」 등 관련법령에 따라 이용자의 개인정보 보호 및 권익을 보호하고 개인정보와 관련한 이용자의 고충을 원활하게 처리할 수 있도록 다음과 같은 처리 및 취급 방침을 두고 있습니다.<br /><br />
	“몰”은 개인정보처리(취급)방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것 입니다.<br />
	TERRA 「개인정보처리(취급)방침」은 다음과 같은 내용을 담고 있습니다.<br /><br />
	01 개인정보의 수집 범위<br />
	02 개인정보의 처리 및 취급 목적<br />
	03 개인정보의 수집항목 및 수집방법<br />
	04 개인정보의 보유 및 이용 기간<br />
	05 개인정보의 파기 절차 및 방법<br />
	06 쿠키(kookie)에 의한 개인정보 수집<br />
	07 만 14세 미만 아동의 개인정보보호<br />
	08 개인정보의 제3자 제공<br />
	09 개인정보 위탁업체 및 업무내용<br />
	10 정보주체의 권리 및 행사 방법<br />
	11 개인정보의 안전성 확보 조치<br />
	12 개인정보 관련 불만 처리<br />
	13 개인정보 보호 책임자<br />
	14 개인정보 처리방침 변경에 따른 공지<br />
	1. 개인정보의 수집 범위<br /><br />
	가. “TERRA RUN”은 적법하고 공정한 수단에 의하여 회원님의 개인정보를 수집하고 있습니다.<br />
	나. 수집되는 개인정보를 필수항목과 선택항목으로 구분하여 수집하고 있습니다.<br />
	- 필수항목 : 아이디, 비밀번호, CI값, 이름, 성별, 주소, 생년월일, 휴대폰번호, 이메일<br />
	- 선택항목 : T-size
	다. 수집하는 개인정보는 서비스 제공에 필요한 최소한의 정보만으로 한정되며, 회원님의 기본적 인권을 침해할 우려가 있는 민감한 개인정보(인종, 종교, 사상, 출신지, 본적지, 정치적 성향 및 범죄기록, 건강상태 및 성생활)는 수집하지 않습니다.<br />
	2. 개인정보의 처리 및 취급 목적<br /><br />
	“몰”은 개인정보를 다음의 목적을 위해 처리합니다. 처리한 개인정보는 다음의 목적 이외의 용도로는 사용되지 않으며 이용 목적이 변경될 시에는 사전 동의를 구합니다.<br /><br />
	가. 홈페이지 회원가입 및 관리 <br />
	회원 가입의사 확인, 회원제 서비스 제공에 따른 본인 식별·인증, 회원자격 유지·관리, 제한적 본인 확인제 시행에 따른 본인확인, 서비스 부정이용 방지, 각종 고지·통지, 고충처리, 분쟁 조정을 위한 기록 보존 등을 목적으로 개인정보를 처리합니다.<br />
	나. 마케팅 및 광고에의 활용 <br />
	신규 서비스(제품) 개발 및 맞춤 서비스 제공, 이벤트 및 광고성 정보 제공 및 참여기회 제공 , 인구통계학적 특성에 따른 서비스 제공 및 광고 게재 , 서비스의 유효성 확인, 접속빈도 파악 또는 회원의 서비스 이용에 대한 통계 등을 목적으로 개인정보를 처리합니다.
	다. 민원사무처리 <br />
	민원인의 신원 확인, 민원사항 확인, 사실조사를 위한 연락/통지, 처리결과 통보 등을 목적으로 개인정보를 처리합니다.
	3. 개인정보 수집항목 및 수집방법<br /><br />
	“TERRA RUN”은 개인정보보호법 제32조에 근거하여 아래와 같이 개인정보를 수집하고 이용합니다.</div>
	<form class="join_form" name="join_form" method="post" action="join_form.php" onsubmit="return chk_join();">
	<p><input type="checkbox" name="ok">멤버십 약관에 동의합니다.</p>
	<div id="button"><input type="button" value="회원가입" onclick="join_ok()" class="join_ok_btn"/></div></form>

<?require_once("./join_f.php");?>