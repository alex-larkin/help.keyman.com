<?php
  require_once('includes/template.php');

  head([
    'title' => "Keyman Configuration - Options Tab"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Keyman Configuration - Options Tab</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="basic_keyboards_tab.php">Prev</a> </td><th width="60%" align="center">Chapter 3. Basic Help</th><td width="20%" align="right"> <a accesskey="n" href="basic_hotkeys_tab.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="basic_options_tab">Keyman Configuration - Options Tab</h2></div></div></div><p>The Options tab of Keyman Configuration includes the Keyman Desktop application options. You can use the Options tab to set general, startup, Keyman Toolbox On Screen Keyboard and advanced options.</p><p>
    <span class="inlinemediaobject"><img src="desktop_images/tab-options2.png"></span>
  </p><h3><a name="id584674"></a>Opening the Options Tab</h3><p>To open the Options tab of Keyman Configuration:</p><div class="orderedlist"><ol type="1"><li><p>Click on the <span class="guiicon">Keyman Desktop</span> icon <span class="inlinemediaobject"><img src="desktop_images/icon-keyman.png"></span>, on the Windows Taskbar near the clock.</p></li><li><p>From the Keyman Desktop menu, select <span class="guilabel">Configuration…</span>.</p></li><li><p>Select the Options tab.</p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3>Keyman Configuration opens in the same tab you last closed it in.</div></li></ol></div><h3><a name="id584723"></a>Using General Options</h3><p>
    <span class="inlinemediaobject"><img src="desktop_images/options-general.png"></span>
  </p><div class="itemizedlist"><ul type="disc"><li><p>Keyboard hotkeys toggle keyboard activation</p><p>You can set unique hotkeys for quick access to any Keyman keyboard. Tick this option to allow a Keyman keyboard hotkey to toggle a keyboard on and off.  Untick this option and a Keyman keyboard hotkey will only turn the Keyman keyboard on.</p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3>Set hotkeys in the <a class="link" href="basic_hotkeys_tab.php" title="Keyman Configuration - Hotkeys Tab">Hotkeys tab</a> of Keyman Configuration.</div></li><li><p>Simulate AltGr with Ctrl+Alt</p><p>Some hardware keyboards do not have a designated AltGr key (Right Alt key). Some Keyman keyboards require AltGr. Tick this option to allow Ctrl+Alt to be used for AltGr. Untick this option and Ctrl+Alt will not be used for AltGr.</p></li><li><p>Select keyboard layout for all applications</p><p>Unlike Windows default behaviour, Keyman Desktop allows you to select one Windows language and Keyman keyboard for all open applications and text fields across your entire system. Tick this option to select one Windows language and Keyman keyboard across your entire system. Untick this option to select Windows language and Keyman keyboards independently for different programs.</p><p>On Windows 8, 8.1, 10 and later versions, this checkbox is disabled because Windows has this functionality built in. The setting can be changed in Windows, with the following steps:</p><div class="itemizedlist"><ul type="circle"><li>Open Control Panel</li><li>Select Language, Advanced Settings</li><li>Check the "Let me set a different input method for each app window" checkbox.</li></ul></div></li><li><p>Show hint messages</p><p>You can turn on and off the beginner hint messages which appear while using Keyman Desktop. Tick this option to show all hint messages. Untick this option to hide all hint messages.</p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3>You can also hide hint messages on a case-by-case bases by ticking <span class="inlinemediaobject"><img src="desktop_images/options-hint.png"></span> at the bottom of each hint.</div></li><li><p><span class="guibutton">Reset Hints</span></p><p>Click the <span class="guibutton">Reset Hints</span> button to switch all hint messages on again, even those that you have switched off on a case-by-case basis.</p></li></ul></div><h3><a name="id583358"></a>Using Startup Options</h3><p>
    <span class="inlinemediaobject"><img src="desktop_images/options-startup.png"></span>
  </p><div class="itemizedlist"><ul type="disc"><li><p>Start when Windows starts</p><p>You can have Keyman Desktop start when Windows starts. Tick this option to have Keyman Desktop start when Windows starts. Untick this option to start Keyman Desktop manually.</p></li><li><p>Show splash screen</p><p>You can turn on and off the Keyman Desktop splash screen that appears when Keyman Desktop starts. Tick this option to show the splash screen on startup. Untick this option to remove the splash screen.</p></li><li><p>Automatically check www.keyman.com weekly for updates.</p><p>Keyman Desktop can automatically check for application and keyboard updates once a week. No personally identifiable information is sent to Keyman in this process. Tick this option to have Keyman Desktop automatically check weekly for updates to Keyman Desktop and the keyboards you have installed. Untick this option to check for updates manually.</p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3>Keyman Desktop can be updated manually through the Support tab in the Configuration menu.</div></li><li><p>Test for conflicting applications when Keyman Desktop starts</p><p>Some applications are not written according to the Windows software development standards and can cause problems with Keyman keyboard input. Tick this option to have Keyman Desktop detect problem applications and work around them. Untick this option to prevent Keyman Desktop from working around problem applications.</p></li></ul></div><h3><a name="id586858"></a>Using On Screen Keyboard Options</h3><p>
    <span class="inlinemediaobject"><img src="desktop_images/options-osk.png"></span>
  </p><div class="itemizedlist"><ul type="disc"><li><p>Release Shift/Ctrl/Alt on On Screen Keyboard after clicking a key</p><p>By default, the On Screen Keyboard of the Keyman Toolbox uses 'sticky' Ctrl, Shift or Alt keys. This means Ctrl, Shift, and Alt stay down on the On Screen Keyboard until they are clicked again or until you press the actual keys on your hardware keyboard. Tick this option to disable the default sticky key behaviour. Untick this option to enable the default sticky key behaviour.</p></li><li><p>Always show On Screen Keyboard Window when Keyman keyboard is selected</p><p>You can have the On Screen Keyboard view of the Keyman Toolbox automatically display whenever you turn on a Keyman keyboard. Tick this option to have the On Screen Keyboard view for your keyboard automatically display. Untick this option to prevent this behaviour.</p></li><li><p>Switch to appropriate On Screen Keyboard/Help automatically when a keyboard is selected</p><p>Each time you turn on a Keyman keyboard, Keyman Desktop can automatically detect and switch to the Keyman Toolbox tool which is best for that Keyman keyboard: either the On Screen Keyboard or Keyboard Usage. Tick this option to have Keyman Desktop automatically detect and display the best view for your Keyman keyboard. Untick this option to prevent Keyman Desktop from switching its display automatically.</p></li></ul></div><h3><a name="id586874"></a>Using Advanced Options</h3><p>
    <span class="inlinemediaobject"><img src="desktop_images/options-advanced.png"></span>
  </p><div class="itemizedlist"><ul type="disc"><li><p>Debugging</p><p>If you are having issues with Keyman Desktop, you can create a debug log for Keyman Desktop. A debug log contains information to help Keyman Technical Support resolve compatibility issues and improve Keyman Desktop. Tick this option to begin a debug log. You should not need to use this option unless you are requested to do so by Keyman Technical Support in relation to an issue you are experiencing.</p><p>The debug log files are created in <span class="guilabel">%LOCALAPPDATA%\Keyman\Diag</span>, and called <span class="guilabel">system#.etl</span>, where # is a number from 0 to 15. Each time you start Keyman Desktop, a new log file will be created, up to <span class="guilabel">system15.etl</span>, after which it will wrap around and start again at <span class="guilabel">system0.etl</span>.  Untick this option to stop collecting a debug log.</p><p>Debug log files will be sent to Keyman Technical Support when you send a diagnostic report to us with the Keyman System Information tool.</p><p>Debug log files are in binary format and can be imported into Windows Event Viewer for viewing, or Microsoft Message Analyzer (recommended).</p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>It is highly recommended that you switch off this option after obtaining the debug log. The log files can grow very large very quickly!</p></div><div class="warning" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Warning</h3><p>Privacy Warning - The debug log records every keystroke you type, even if a Keyman keyboard is not active. This includes logins and passwords! For this reason, we recommend only switching the debug log on for short and isolated tests as specifically requested by Keyman Technical Support.</p></div></li></ul></div><h3><a name="id586958"></a>Related Topics</h3><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="basic_config_menu.php" title="Keyman Desktop Configuration">Keyman Desktop Configuration</a>
      </p></li><li><p>
        <a class="xref" href="basic_hotkeys_tab.php" title="Keyman Configuration - Hotkeys Tab">Keyman Configuration - Hotkeys Tab</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="basic_keyboards_tab.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="basic.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="basic_hotkeys_tab.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Keyman Configuration - Keyboard Layouts Tab </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Keyman Configuration - Hotkeys Tab</td></tr></table></div>
