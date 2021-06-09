function restart(){
	window.location.reload();
}
var questionnumber=0;
		Tpoint=0;
		Fpoint=0;
		function answer(e) {
			var music=document.getElementById("btnmu");
			music.currentTime = 0;
			music.play();
			var title_answer=["q2","q4","q4","q2","q3","q4","q4","q3","q2","q1","q3","q4","q3","q2","q1","q4","q4","q4","q4","q1"];
			var btn=document.getElementById("1");
			var question=["2.齲齒的形成有四個影響因素，下列何者不是?",
						  "3.一般來說，正常人共有幾顆恆牙(包括智齒)?",
						  "4.一般狀況下，我們應該多久做一次定期口腔檢查?",
						  "5.若沒刷牙，黏附在牙齒上的細菌初期會形成甚麼?",
						  "6.人的一生有幾顆牙?",
						  "7.牙線操作基本動作(A)手臂長約45公分長(B)呈[C]字型(C)割出嘎吱聲(D)前後割(E)上下割。何者為是?",
						  "8.恆牙第一大臼齒萌出時間?",
						  "9.使用牙線，主要是清潔何處?",
						  "10.刷牙最好時機為何?",
						  "11.口內的牙菌斑在哪裡最多?",
						  "12.從小保護牙，老來不缺牙，保護牙齒四部曲，以下何者為是?",
						  "13.中年人牙齒喪失的原因?",
						  "14.兒童口腔常見四大問題:(A)齲齒(B)牙周疾病(C)埋伏齒(D)多生牙(E)先天缺牙(F)齒列不整(G)牙齒外傷",
						  "15.每顆牙齒都有它的功能，請問前臼齒的主要功能為何?",
						  "16.牙齒經常與氮化物接觸，可以有哪些功能?",
						  "17.含氮漱口水使用注意事項為何?",
						  "18.下列何為錯誤的口腔觀念:(A)邊看電視、報紙、邊潔牙(B)沒有進食就不用刷牙(C)長期使用漱口藥水潔牙(D)飯後嚼食口腔糖潔牙",
						  "19.下列哪些為刷牙最重要的觀念:(A)刷牙的方法(B)刷牙的次數(C)刷牙的順序(D)刷牙的時機",
						  "20.下列哪些為牙齒的主要功能:(A)咀嚼食物(B)幫助發音(C)保持美好臉型(D)喝飲料",];
			var btn_answer1=["細菌的存在","20顆","3個月","色素沉澱","20顆","a+b+c","剛出生的時候即長出","牙縫間的牙肉",
						     "餐後及睡前","咬合面","睡前一定要刷牙，一天至少兩次","齲齒","A+B+C+D","壓碎食物","抑制口腔細菌滋長",
						     "氟化納0.2%含氟濃度約900ppm，每星期使用一次，每次10cc","A+B","A+B","	A+B+C"];
			var btn_answer2=["食物的數量","24顆","半年","食物殘渣","28顆","a+b+c+e","大約在出生六個月",
						     "牙齒鄰接表面","每晚睡前","牙冠","要有氧，使用含氧牙膏","牙結石","A+B+F+G","研磨食物",
						     "強化牙齒表面結構","氟化鈉0.05%含氟濃度約225ppm，每日使用一次，每次10cc","A+B+C","A+B+C","A+B+D"];
			var btn_answer3=["清潔牙齒","28顆","一年","牙菌斑","32顆","a+b+c+d","6歲幼稚園大班或國小一年級",
							 "牙齒唇面與舌面","早起及晚上睡覺前","牙齒靠近牙齦的地方與牙縫中的牙齒鄰接面",
							 "少甜食，多漱口","牙周病","A+C+D+F","切割食物","增加牙齒再礦化的功能","使用含氟漱口水後，30分鐘內勿喝水及進食",
							 "A+C+D","A+C+D","A+C+D"];
			var btn_answer4=["食物總類","32顆","兩年","牙結石","52顆","以上皆是","國中一年級青春期","以上皆是","覺得髒就刷","以上皆是","以上皆是",
							 "牙齦炎","A+B+E+G","撕裂食物","以上皆是","以上皆是","A+B+C+D","A+B+C+D","A+B+C+D"];
			var btn=document.getElementById(e.id);
				btn.style.border="5px solid red";
			setTimeout(()=>{
				var btn=document.getElementById(e.id);
				btn.style.border="5px solid gray";
				document.getElementById("title").innerHTML=question[questionnumber];
				document.getElementById("q1").innerHTML=btn_answer1[questionnumber];
				document.getElementById("q2").innerHTML=btn_answer2[questionnumber];
				document.getElementById("q3").innerHTML=btn_answer3[questionnumber];
				document.getElementById("q4").innerHTML=btn_answer4[questionnumber];
				questionnumber++;
			},1000)
			if(questionnumber==19)
			{
				var reset=document.getElementById("reset");
				reset.hidden=false;	
			}
			if(e.id==title_answer[questionnumber])
			{
				Tpoint++;
				document.getElementById("T").innerHTML=Tpoint;
			}
			else
			{
				Fpoint++;
				document.getElementById("F").innerHTML=Fpoint;
				alert("答錯了!!");
			}
			document.getElementById("point").innerHTML=Tpoint*5;
		}