<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>SEAL</title>
		<meta name="description" content="Vaeb's Script Encrypter And Loader [SEAL]">
		<meta name="author" content="Vaeb (flipflop8421)" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, user-scalable=yes">
		<link rel="shortcut icon" href="/Images/ANLogoIcon.png">

		<style type="text/css">


			@font-face{
				font-family:Brandon;
				src:url(/WebFonts/Brandon_reg.otf);
				font-style:normal;
			}

			html, body {
				margin: 6px 10px;
			}

			body {
				background-color: #222;
				font-family:Brandon,serif;
				font-size:16px;
				font-style:"normal";
				font-weight: 500;
				background-image: url("/Images/Wallpaper/Squares.png");
				color:#fff;
			}

			a {
				color: #ff9 !important;
			}

			input {
				background-color: #222;
				border-color: #333;
				color: #fff;   
			}

			textarea {
				background-color: #222;
				border-color: #333;
				color: #fff;   
			}

			hr {
				background-color: #222;
				border-color: #333;
			}

			.SearchBox {
				position: relative;
				top: 0px;
				margin: 5px 0px 5px 0px;
			}

			#LoadButton {
				position: relative;
				top: 20px;
			}

			#span1 {
				position: relative;
				padding: 0px 31px 0px 0px;
				top: -140px;
			}

			#span2 {
				position: relative;
				padding: 0px 5px 0px 0px;
				top: 1px;
			}

			#span3 {
				position: relative;
				padding: 0px 14px 0px 0px;
				top: 5px;
			}

			#input2 {
				top: 3px;
			}

			#input3 {
				top: 5px;
			}

		</style>
	</head>

	<body>
		<form id="SearchForm" action="index.php" method="post">
			<h3>Vaeb's Script Encrypter And Loader [SEAL]</h3>
			<p>Instructions: <a href="http://prntscr.com/ape5d0">http://prntscr.com/ape5d0</a></p>
			<p>Security: <a href="http://prntscr.com/apompr">http://prntscr.com/apompr</a></p>
			<textarea name="source" class="SearchBox" placeholder="Insert Code Here" rows="10" cols="150" required></textarea><br/><br/>
			<span id="span2">Server Side: </span><input name="server" type="checkbox" class="SearchBox" id="input2"/><br/>
			<span id="span3">Password: </span><input name="pass" type="text" class="SearchBox" id="input3" placeholder="Password" required/><br/>
			<input type="submit" id="LoadButton" value="ENCRYPT // LOAD"/>
		</form>
		<br/>

		<?php

			function encrypt($EncMsg) {

				function offsetASCII($OrigByte, $Offset, $MinASCII, $MaxASCII) {
					$OrigByte = $OrigByte + $Offset;
					if ($OrigByte > $MaxASCII) {
						return offsetASCII($MinASCII, $OrigByte-$MaxASCII, $MinASCII, $MaxASCII);
					} else {
						return $OrigByte;
					}
				}

				function encryptString($Msg) {
					$NewKeyNums = array();
					$NewEncryptionChars = array();
				
					$NewEncryption = "";
					$MsgArr = str_split($Msg);
					$Iter = 0;

					foreach ($MsgArr as $Char) {
						array_push($NewKeyNums, rand(65, (65+25)));
					}

					foreach ($MsgArr as $Char) {
						$NowByte = ord($Char);
						$EncryptedByte = offsetASCII($NowByte, $NewKeyNums[$Iter], 65, 90);
						$EncryptedChar = chr($EncryptedByte);
						$TotalOffset = (ord($EncryptedChar) - $NowByte) * -1;
						$NewKeyNums[$Iter] = $TotalOffset;
						array_push($NewEncryptionChars, $EncryptedChar);

						$Iter = $Iter + 1;
					}
					
					$NewKey = implode("END", $NewKeyNums);
					$NewEncryption = implode("", $NewEncryptionChars);
					$Both = array($NewEncryption, $NewKey);
					return $Both;
				}
				
				$ReturnVals = encryptString($EncMsg);
				
				return $ReturnVals;

			}

			if (!empty($_POST["source"])) {
				$source = $_POST["source"];
				$pass = $_POST["pass"];

				$isServer = "false";

				if (isset($_POST["server"])) {
					$isServer = "true";
				}

				$realpass = "lunar";

				if ($pass == $realpass) {

$DecryptionCode1 = '--Must be ran client-side!
--Run in SB

local UIS999 = game:GetService("UserInputService")
local LP999 = game:GetService("Players").LocalPlayer
local KeyWord999 = ""
local MainKey999 = ""
local BreakCons999 = {}
local Valid999 = {"a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"}
local ValidNumbers999 = {
	["zero"] = "0";
	["one"] = "1";
	["two"] = "2";
	["three"] = "3";
	["four"] = "4";
	["five"] = "5";
	["six"] = "6";
	["seven"] = "7";
	["eight"] = "8";
	["nine"] = "9";
}

local isServerScript999 = ';

$DecryptionCode2 = '
local Source999 = [===========================[
';

$DecryptionCode3 = '
]===========================]

local function GetKey()
	local RandNum1 = tostring(math.floor(tick()%math.random()*10^14))
	local RandNum2 = tostring(math.floor(tick()%math.random()*10^14))
	coroutine.wrap(function()
		local ServerCode = [[
			local Ok1, Val1 = pcall(function() return game:GetService("HttpService"):GetAsync("http://www.ajohnsonnetwork.com/enc/]] .. KeyWord999 .. [[.html", true) end)
			if Ok1 and Val1 ~= nil and Val1 ~= "" then
				local RemoteFunc = Instance.new("RemoteFunction")
				RemoteFunc.Name = "]] .. RandNum1 .. [["
				local HasDone = false
				function RemoteFunc.OnServerInvoke(Player, Rand)
					if HasDone == false and Rand == "]] .. RandNum2 .. [[" then
						HasDone = true
						return Val1
					else
						return nil
					end
				end
				RemoteFunc.Parent = game:GetService("Lighting")
			else
				print("Decryption Key Invalid")
			end
		]]
		NS(ServerCode, workspace)
	end)()
	local RemoteFunc = game:GetService("Lighting"):WaitForChild(RandNum1)
	local Result = RemoteFunc:InvokeServer(RandNum2)
	pcall(function() RemoteFunc:Destroy() end)
	if Result ~= nil then
		MainKey999 = Result
	else
		print("No Result Found")
	end
end

local function offsetASCII(OrigByte, Offset)
	OrigByte = OrigByte - Offset
	return OrigByte
end

local function Decrypt()
	local RandomNums = {}
	local DecryptedNums = {}

	MainKey999 = MainKey999:gsub("END", ":")
	for RandomNum in MainKey999:gmatch("[^:]*") do
		if #RandomNum ~= 0 then
			RandomNums[#RandomNums-(-1)] = RandomNum
		end
	end

	local EncIter = 0
	for EncryptedChar in Source999:gmatch("%w") do
		EncIter = EncIter - (-1)
		local OrigByte = string.byte(EncryptedChar)
		local DecryptedChar = string.char(offsetASCII(OrigByte, RandomNums[EncIter] * -1))
		DecryptedNums[#DecryptedNums-(-1)] = DecryptedChar
	end

	local DecryptedMsg = table.concat(DecryptedNums)

	print("-Running Script-")

	if isServerScript999 then
		NS(DecryptedMsg, workspace)
	else
		NLS(DecryptedMsg, LP999.Character)
	end
end

print("-Enter KeyWord-")

BreakCons999[#BreakCons999-(-1)] = UIS999.InputBegan:connect(function(Input, Processed)
	--if not Processed then
		local Key = tostring(Input.KeyCode):lower()
		if #Key > 4 and Key:sub(1, 4) == "enum" then
			Key = Key:sub(14)
			if Key == "backspace" then
				KeyWord999 = ""
				print("-Cleared KeyWord-")
			elseif Key == "return" then
				for _,v in pairs(BreakCons999) do
					v:disconnect()
				end
				print("-KeyWord Sent-")
				GetKey()
				Decrypt()
			else
				for _,v in pairs(Valid999) do
					if v == Key then
						if ValidNumbers999[Key] then
							Key = ValidNumbers999[Key]
						end
						KeyWord999 = KeyWord999 .. Key
						print("Added Character to KeyWord")
					end
				end
			end
		end
	--end
end)';

					function makeDir($longNum) {
						$date = new DateTime();
						$newNum1 = "";

						$fi = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);
						$newNum2 = iterator_count($fi)+1;

						if ($longNum == 1) {
							$newNum1 = ($date->getTimestamp())*3;
							$newNum1 = substr($newNum1, 0, 4);
						} else {
							$newNum2 = $newNum2 * 8;
						}

						$newName = $newNum1 . $newNum2 . ".html";

						return $newName;
					}

					function makePage($newsource, $longNum) {
						$newName = makeDir($longNum);

						$tpl = file_get_contents("template.html");
						$new_member_file = str_replace("{contents}", $newsource, $tpl);

						$fp = fopen($newName, "w"); 
						fwrite($fp, $new_member_file);
						fclose($fp);

						return $newName;
					}

					$EncVals = encrypt($source);
					$finalText = $DecryptionCode1 . $isServer . $DecryptionCode2 . $EncVals[0] . $DecryptionCode3;

					$newEncPage = makePage($finalText, 0);
					$newKeyPage = makePage($EncVals[1], 1);

					//$newEncPageShort = str_replace(".html", "", $newEncPage);
					$newKeyPageShort = str_replace(".html", "", $newKeyPage);

					$newEncPageLong = "http://www.ajohnsonnetwork.com/enc/" . $newEncPage;
					//$newKeyPageLong = "http://www.ajohnsonnetwork.com/enc/" . $newKeyPage;

					echo "<b>Raw Script URL:</b> <a href=" . $newEncPage . ">" . $newEncPageLong . "</a>";
					echo "<br/><br/>";
					echo "<b>Keyword:</b> " . $newKeyPageShort;

					echo "<br/><br/><hr/><br/><br/><b>Instructions:</b><br/><br/>";

					echo "1. Run the Raw Script URL (the one that's just been generated) locally in SB (you must <b>ALWAYS</b> run it client side, regardless of your script's type)";
					echo "<br/><br/>";
					echo "2. Next press each character in the Keyword (the one that's just been generated) using your keyboard (You don't enter the characters into a GUI or into the chat, you just press them on your keyboard)";
					echo "<br/>";
					echo "(The Raw Script URL you ran should detect your key presses and print in your output 'Added Character to KeyWord' on each key press)";
					echo "<br/>";
					echo "(Press backspace to reset entering the characters)";
					echo "<br/><br/>";
					echo "3. Once you've finished pressing the characters, press enter to confirm/run";

				} else {
					echo "ERROR: Incorrect Password";
				}
			}

		?>
	</body>
</html>
