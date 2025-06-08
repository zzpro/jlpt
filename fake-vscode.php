<?php

if(isset($_GET['file'])){
    $file = $_GET['file'];
}else{
    $file = 'n1_grammar.pdf';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VSCode - Workspace</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', 'Microsoft YaHei', sans-serif;
        }
        
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            background-color: #1e1e1e;
            color: #d4d4d4;
            overflow: hidden;
        }
        
        /* 顶部菜单栏 */
        .titlebar {
            height: 30px;
            background-color: #3c3c3c;
            display: flex;
            align-items: center;
            padding: 0 10px;
            font-size: 12px;
        }
        
        .menu-item {
            padding: 0 8px;
            cursor: pointer;
        }
        
        .menu-item:hover {
            background-color: #505050;
        }
        
        /* 主体内容 */
        .main-container {
            display: flex;
            flex: 1;
            overflow: hidden;
        }
        
        /* 活动栏 */
        .activity-bar {
            width: 50px;
            background-color: #333333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 10px;
        }
        
        .activity-icon {
            width: 48px;
            height: 48px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            margin-bottom: 10px;
            color: #858585;
        }
        
        .activity-icon.active {
            color: #ffffff;
            border-left: 2px solid #007acc;
        }
        
        .activity-icon:hover {
            color: #ffffff;
        }
        
        /* 侧边栏 */
        .sidebar {
            width: 250px;
            background-color: #252526;
            display: flex;
            flex-direction: column;
            border-right: 1px solid #1e1e1e;
        }
        
        .sidebar-header {
            padding: 10px;
            font-size: 11px;
            text-transform: uppercase;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .sidebar-content {
            flex: 1;
            overflow-y: auto;
        }
        
        .file-explorer {
            padding: 5px 0;
        }
        
        .folder {
            padding: 3px 10px 3px 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        
        .folder:hover {
            background-color: #2a2d2e;
        }
        
        .folder-icon {
            margin-right: 5px;
            color: #c5c5c5;
        }
        
        .file {
            padding: 3px 10px 3px 35px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        
        .file:hover {
            background-color: #2a2d2e;
        }
        
        .file.active {
            background-color: #37373d;
        }
        
        .file-icon {
            margin-right: 5px;
            color: #c5c5c5;
        }
        
        /* 编辑区 */
        .editor-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            background-color: #1e1e1e;
        }
        
        .tabs {
            height: 35px;
            background-color: #252526;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #1e1e1e;
        }
        
        .tab {
            padding: 0 10px;
            height: 100%;
            display: flex;
            align-items: center;
            font-size: 13px;
            cursor: pointer;
            border-right: 1px solid #1e1e1e;
        }
        
        .tab.active {
            background-color: #1e1e1e;
            border-top: 1px solid #007acc;
        }
        
        .tab-icon {
            margin-right: 5px;
            color: #c5c5c5;
        }
        
        .editor {
            flex: 1;
            padding: 10px;
            font-family: 'Consolas', 'Courier New', monospace;
            font-size: 14px;
            line-height: 0.5;
            overflow-y: auto;
            white-space: pre;
        }
        
        .line {
            display: flex;
        }
        
        .line-number {
            width: 40px;
            color: #858585;
            text-align: right;
            padding-right: 10px;
            user-select: none;
        }
        
        .line-content {
            flex: 1;
        }
        
        .keyword {
            color: #569cd6;
        }
        
        .string {
            color: #ce9178;
        }
        
        .comment {
            color: #6a9955;
        }
        
        .function {
            color: #dcdcaa;
        }
        
        .type {
            color: #4ec9b0;
        }
        
        .variable {
            color: #9cdcfe;
        }
        
        /* 底部面板 */
        .panel {
            height: 180px;
            background-color: #1e1e1e;
            border-top: 1px solid #333333;
            display: flex;
            flex-direction: column;
        }
        
        .panel-tabs {
            height: 35px;
            background-color: #252526;
            display: flex;
            align-items: center;
        }
        
        .panel-tab {
            padding: 0 10px;
            height: 100%;
            display: flex;
            align-items: center;
            font-size: 13px;
            cursor: pointer;
        }
        
        .panel-tab.active {
            border-bottom: 1px solid #007acc;
        }
        
        .panel-content {
            flex: 1;
            padding: 10px;
            font-family: 'Consolas', 'Courier New', monospace;
            font-size: 12px;
            overflow-y: auto;
        }
        
        /* 状态栏 */
        .statusbar {
            height: 22px;
            background-color: #007acc;
            display: flex;
            align-items: center;
            padding: 0 10px;
            font-size: 12px;
            color: #ffffff;
        }
        
        .status-item {
            margin-right: 15px;
            display: flex;
            align-items: center;
        }
        
        .status-icon {
            margin-right: 5px;
        }
        
        .right-status {
            margin-left: auto;
            display: flex;
        }
        
        /* 图标样式 */
        .icon {
            font-family: 'Segoe MDL2 Assets', 'Segoe UI Symbol';
        }
        
        /* 题目框架样式 */
        .quiz-container {
            position: absolute;
            left: 300px;
            right: 0;
            bottom: 0;
            background-color: #1e1e1e;
            z-index: 1100;
            display: none;
            border: none;
            width: calc(100% - 300px);
            height: calc(100% - 750px);
            /* 添加滚动条样式 */
            scrollbar-width: thin;
            scrollbar-color: #424242 #1e1e1e;
        }
        
        /* Webkit浏览器的滚动条样式 */
        .quiz-container::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }
        
        .quiz-container::-webkit-scrollbar-track {
            background: #1e1e1e;
        }
        
        .quiz-container::-webkit-scrollbar-thumb {
            background-color: #424242;
            border-radius: 6px;
            border: 3px solid #1e1e1e;
        }
        
        .quiz-container::-webkit-scrollbar-corner {
            background: #1e1e1e;
        }
        
        .quiz-container.visible {
            display: block;
        }
        
        .quiz-toggle {
            position: absolute;
            top: 35px;
            right: 10px;
            z-index: 101;
            background-color: #007acc;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 12px;
        }
        
        .quiz-toggle:hover {
            background-color: #0062a3;
        }
        
        /* 当题目显示时，编辑区域的样式 */
        .editor-container.quiz-mode .editor {
            opacity: 1;
        }
        
        /* 紧急切换按钮 */
        .emergency-switch {
            position: fixed;
            bottom: 230px; /* 放在底部面板上方 */
            right: 10px;
            z-index: 1000;
            background-color: #d32f2f;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 12px;
            opacity: 0.7;
        }
        
        .emergency-switch:hover {
            opacity: 1;
        }
    </style>
</head>
<body>
    <!-- 顶部菜单栏 -->
    <div class="titlebar">
        <div class="menu-item">File</div>
        <div class="menu-item">Edit</div>
        <div class="menu-item">Selection</div>
        <div class="menu-item">View</div>
        <div class="menu-item">Go</div>
        <div class="menu-item">Run</div>
        <div class="menu-item">Terminal</div>
        <div class="menu-item">Help</div>
    </div>
    
    <!-- 主体内容 -->
    <div class="main-container">
        <!-- 活动栏 -->
        <div class="activity-bar">
            <div class="activity-icon active">📁</div>
            <div class="activity-icon">🔍</div>
            <div class="activity-icon">🔀</div>
            <div class="activity-icon">🐞</div>
            <div class="activity-icon">📦</div>
        </div>
        
        <!-- 侧边栏 -->
        <div class="sidebar">
            <div class="sidebar-header">
                <span>EXPLORER</span>
                <span>...</span>
            </div>
            <div class="sidebar-content">
                <div class="file-explorer">
                    <div class="folder">
                        <span class="folder-icon">📁</span>
                        <span>Project Folder</span>
                    </div>
                    <div class="folder">
                        <span class="folder-icon">📁</span>
                        <span>src</span>
                    </div>
                    <div class="file">
                        <span class="file-icon">📄</span>
                        <span>index.js</span>
                    </div>
                    <div class="file active">
                        <span class="file-icon">📄</span>
                        <span>app.js</span>
                    </div>
                    <div class="file">
                        <span class="file-icon">📄</span>
                        <span>styles.css</span>
                    </div>
                    <div class="folder">
                        <span class="folder-icon">📁</span>
                        <span>components</span>
                    </div>
                    <div class="file">
                        <span class="file-icon">📄</span>
                        <span>Header.jsx</span>
                    </div>
                    <div class="file">
                        <span class="file-icon">📄</span>
                        <span>Footer.jsx</span>
                    </div>
                    <div class="file">
                        <span class="file-icon">📄</span>
                        <span>Sidebar.jsx</span>
                    </div>
                    <div class="folder">
                        <span class="folder-icon">📁</span>
                        <span>utils</span>
                    </div>
                    <div class="file">
                        <span class="file-icon">📄</span>
                        <span>helpers.js</span>
                    </div>
                    <div class="file">
                        <span class="file-icon">📄</span>
                        <span>api.js</span>
                    </div>
                    <div class="folder">
                        <span class="folder-icon">📁</span>
                        <span>node_modules</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 编辑区 -->
        <div class="editor-container">
            <div class="tabs">
                <div class="tab active">
                    <span class="tab-icon">📄</span>
                    <span>app.js</span>
                </div>
                <div class="tab">
                    <span class="tab-icon">📄</span>
                    <span>index.js</span>
                </div>
            </div>
            <div class="editor">
                <div class="line">
                    <div class="line-number">1</div>
                    <div class="line-content">&lt;<span class="type">div</span> <span class="variable">class</span>=<span class="string">"d-flex flex-column fix-height-content"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">2</div>
                    <div class="line-content">  &lt;<span class="comment">!-- パンくずリスト --</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">3</div>
                    <div class="line-content">  &lt;<span class="type">nav</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">4</div>
                    <div class="line-content">    &lt;<span class="type">ol</span> <span class="variable">class</span>=<span class="string">"breadcrumb"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">5</div>
                    <div class="line-content">      &lt;<span class="type">li</span> <span class="variable">class</span>=<span class="string">"breadcrumb-item"</span>&gt;型式構成一覧&lt;/<span class="type">li</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">6</div>
                    <div class="line-content">    &lt;/<span class="type">ol</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">7</div>
                    <div class="line-content">  &lt;/<span class="type">nav</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">8</div>
                    <div class="line-content">  &lt;<span class="comment">!-- 検索エリア --</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">9</div>
                    <div class="line-content">  &lt;<span class="type">div</span> <span class="variable">class</span>=<span class="string">"mb-2"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">10</div>
                    <div class="line-content">    &lt;<span class="type">div</span> <span class="variable">class</span>=<span class="string">"mb-2"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">11</div>
                    <div class="line-content">      &lt;<span class="type">ngb-accordion</span> <span class="variable">activeIds</span>=<span class="string">"search-condition"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">12</div>
                    <div class="line-content">        &lt;<span class="type">ngb-panel</span> <span class="variable">id</span>=<span class="string">"search-condition"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">13</div>
                    <div class="line-content">          &lt;<span class="type">ng-template</span> <span class="variable">ngbPanelHeader</span> <span class="variable">let-opened</span>=<span class="string">"opened"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">14</div>
                    <div class="line-content">            &lt;<span class="type">button</span> <span class="variable">type</span>=<span class="string">"button"</span> <span class="variable">class</span>=<span class="string">"btn p-0 w-100"</span> <span class="variable">ngbPanelToggle</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">15</div>
                    <div class="line-content">              &lt;<span class="type">div</span> <span class="variable">class</span>=<span class="string">"d-flex align-items-center"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">16</div>
                    <div class="line-content">                &lt;<span class="type">span</span> <span class="variable">class</span>=<span class="string">"mr-1"</span> *<span class="variable">ngIf</span>=<span class="string">"opened"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">17</div>
                    <div class="line-content">                  &lt;<span class="type">i</span> <span class="variable">class</span>=<span class="string">"fas fa-fw fa-chevron-down"</span>&gt;&lt;/<span class="type">i</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">18</div>
                    <div class="line-content">                &lt;/<span class="type">span</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">19</div>
                    <div class="line-content">                &lt;<span class="type">span</span> <span class="variable">class</span>=<span class="string">"mr-1"</span> *<span class="variable">ngIf</span>=<span class="string">"!opened"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">20</div>
                    <div class="line-content">                  &lt;<span class="type">i</span> <span class="variable">class</span>=<span class="string">"fas fa-fw fa-chevron-right"</span>&gt;&lt;/<span class="type">i</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">21</div>
                    <div class="line-content">                &lt;/<span class="type">span</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">22</div>
                    <div class="line-content">                &lt;<span class="type">label</span> <span class="variable">class</span>=<span class="string">"m-0"</span>&gt;検索条件&lt;/<span class="type">label</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">23</div>
                    <div class="line-content">              &lt;/<span class="type">div</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">24</div>
                    <div class="line-content">            &lt;/<span class="type">button</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">25</div>
                    <div class="line-content">          &lt;/<span class="type">ng-template</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">26</div>
                    <div class="line-content">          &lt;<span class="type">ng-template</span> <span class="variable">ngbPanelContent</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">27</div>
                    <div class="line-content">            &lt;<span class="type">form</span> #<span class="variable">productConfigSearchForm</span>=<span class="string">"ngForm"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">28</div>
                    <div class="line-content">              &lt;<span class="type">div</span> <span class="variable">class</span>=<span class="string">"row"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">29</div>
                    <div class="line-content">                &lt;<span class="type">div</span> <span class="variable">class</span>=<span class="string">"mb-3 col-6 col-xl-2"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">30</div>
                    <div class="line-content">                  &lt;<span class="type">label</span>&gt;型式名&lt;/<span class="type">label</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">31</div>
                    <div class="line-content">                  &lt;<span class="type">input</span> <span class="variable">type</span>=<span class="string">"text"</span> <span class="variable">class</span>=<span class="string">"form-control"</span> <span class="variable">name</span>=<span class="string">"model_number_summary_name"</span></div>
                </div>
                <div class="line">
                    <div class="line-number">32</div>
                    <div class="line-content">                    [(<span class="variable">ngModel</span>)]=<span class="string">"searchCondition.model_number_summary_name"</span> (<span class="variable">keyup.enter</span>)=<span class="string">"search()"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">33</div>
                    <div class="line-content">                &lt;/<span class="type">div</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">34</div>
                    <div class="line-content">                &lt;<span class="type">div</span> <span class="variable">class</span>=<span class="string">"mb-3 col-6 col-xl-2"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">35</div>
                    <div class="line-content">                  &lt;<span class="type">label</span>&gt;型式テンプレート名称&lt;/<span class="type">label</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">36</div>
                    <div class="line-content">                  &lt;<span class="type">ng-select</span> [<span class="variable">items</span>]=<span class="string">"templateList"</span> [<span class="variable">bindLabel</span>]=<span class="string">"'model_template_name'"</span> [<span class="variable">bindValue</span>]=<span class="string">"'model_template_id'"</span> <span class="variable">name</span>=<span class="string">"model_template_name"</span> [(<span class="variable">ngModel</span>)]=<span class="string">"searchCondition.model_template_name"</span>&gt;&lt;/<span class="type">ng-select</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">37</div>
                    <div class="line-content">                &lt;/<span class="type">div</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">38</div>
                    <div class="line-content">              &lt;/<span class="type">div</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">39</div>
                    <div class="line-content">            &lt;/<span class="type">form</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">40</div>
                    <div class="line-content">          &lt;/<span class="type">ng-template</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">41</div>
                    <div class="line-content">        &lt;/<span class="type">ngb-panel</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">42</div>
                    <div class="line-content">      &lt;/<span class="type">ngb-accordion</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">43</div>
                    <div class="line-content">    &lt;/<span class="type">div</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">44</div>
                    <div class="line-content">    &lt;<span class="type">div</span> <span class="variable">class</span>=<span class="string">"d-flex justify-content-center"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">45</div>
                    <div class="line-content">      &lt;<span class="type">button</span> <span class="variable">type</span>=<span class="string">"button"</span> <span class="variable">class</span>=<span class="string">"btn btn-outline-secondary mr-1"</span> (<span class="variable">click</span>)=<span class="string">"clear()"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">46</div>
                    <div class="line-content">        &lt;<span class="type">i</span> <span class="variable">class</span>=<span class="string">"fas fa-eraser mr-1"</span>&gt;&lt;/<span class="type">i</span>&gt;検索条件をクリア</div>
                </div>
                <div class="line">
                    <div class="line-number">47</div>
                    <div class="line-content">      &lt;/<span class="type">button</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">48</div>
                    <div class="line-content">      &lt;<span class="type">button</span> <span class="variable">type</span>=<span class="string">"button"</span> <span class="variable">class</span>=<span class="string">"btn btn-success ml-1"</span> (<span class="variable">click</span>)=<span class="string">"search()"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">49</div>
                    <div class="line-content">        &lt;<span class="type">i</span> <span class="variable">class</span>=<span class="string">"fas fa-search mr-1"</span>&gt;&lt;/<span class="type">i</span>&gt;検索</div>
                </div>
                <div class="line">
                    <div class="line-number">50</div>
                    <div class="line-content">      &lt;/<span class="type">button</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">51</div>
                    <div class="line-content">    &lt;/<span class="type">div</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">52</div>
                    <div class="line-content">  &lt;/<span class="type">div</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">53</div>
                    <div class="line-content">  &lt;<span class="comment">!-- 型式構成一覧 --</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">54</div>
                    <div class="line-content">  &lt;<span class="type">div</span> <span class="variable">class</span>=<span class="string">"flex-grow-1 d-flex flex-column"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">55</div>
                    <div class="line-content">    &lt;<span class="type">div</span> <span class="variable">class</span>=<span class="string">"d-flex justify-content-end mb-2"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">56</div>
                    <div class="line-content">      &lt;<span class="type">button</span> <span class="variable">type</span>=<span class="string">"button"</span> <span class="variable">class</span>=<span class="string">"btn btn-success mx-1"</span> (<span class="variable">click</span>)=<span class="string">"displayModelConfig()"</span> [<span class="variable">disabled</span>]=<span class="string">"!selectedRow"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">57</div>
                    <div class="line-content">        &lt;<span class="type">i</span> <span class="variable">class</span>=<span class="string">"fas fa-info-circle mr-1"</span>&gt;&lt;/<span class="type">i</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">58</div>
                    <div class="line-content">        詳細表示</div>
                </div>
                <div class="line">
                    <div class="line-number">59</div>
                    <div class="line-content">      &lt;/<span class="type">button</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">60</div>
                    <div class="line-content">      &lt;<span class="type">button</span> <span class="variable">type</span>=<span class="string">"button"</span> <span class="variable">class</span>=<span class="string">"btn btn-success mx-1"</span> (<span class="variable">click</span>)=<span class="string">"addModelConfig()"</span> *<span class="variable">ngIf</span>=<span class="string">"hasCreatePermission"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">61</div>
                    <div class="line-content">        &lt;<span class="type">i</span> <span class="variable">class</span>=<span class="string">"fas fa-plus mr-1"</span>&gt;&lt;/<span class="type">i</span>&gt;新規登録</div>
                </div>
                <div class="line">
                    <div class="line-number">62</div>
                    <div class="line-content">      &lt;/<span class="type">button</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">63</div>
                    <div class="line-content">      &lt;<span class="type">button</span> <span class="variable">type</span>=<span class="string">"button"</span> <span class="variable">class</span>=<span class="string">"btn btn-success mx-1"</span> (<span class="variable">click</span>)=<span class="string">"addModelConfig()"</span> [<span class="variable">disabled</span>]=<span class="string">"!selectedRow"</span></div>
                </div>
                <div class="line">
                    <div class="line-number">64</div>
                    <div class="line-content">      *<span class="variable">ngIf</span>=<span class="string">"hasUpdatePermission"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">65</div>
                    <div class="line-content">      &lt;<span class="type">i</span> <span class="variable">class</span>=<span class="string">"fas fa-edit mr-1"</span>&gt;&lt;/<span class="type">i</span>&gt;選択行をコピー</div>
                </div>
                <div class="line">
                    <div class="line-number">66</div>
                    <div class="line-content">    &lt;/<span class="type">button</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">67</div>
                    <div class="line-content">      &lt;<span class="type">button</span> <span class="variable">type</span>=<span class="string">"button"</span> <span class="variable">class</span>=<span class="string">"btn btn-success mx-1"</span> (<span class="variable">click</span>)=<span class="string">"editModelConfig()"</span> [<span class="variable">disabled</span>]=<span class="string">"!selectedRow"</span></div>
                </div>
                <div class="line">
                    <div class="line-number">68</div>
                    <div class="line-content">        *<span class="variable">ngIf</span>=<span class="string">"hasUpdatePermission"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">69</div>
                    <div class="line-content">        &lt;<span class="type">i</span> <span class="variable">class</span>=<span class="string">"fas fa-edit mr-1"</span>&gt;&lt;/<span class="type">i</span>&gt;選択行を編集</div>
                </div>
                <div class="line">
                    <div class="line-number">70</div>
                    <div class="line-content">      &lt;/<span class="type">button</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">71</div>
                    <div class="line-content">      &lt;<span class="type">button</span> <span class="variable">type</span>=<span class="string">"button"</span> <span class="variable">class</span>=<span class="string">"btn btn-success mx-1"</span> (<span class="variable">click</span>)=<span class="string">"editUnitConfig()"</span> [<span class="variable">disabled</span>]=<span class="string">"!selectedRow"</span></div>
                </div>
                <div class="line">
                    <div class="line-number">72</div>
                    <div class="line-content">        *<span class="variable">ngIf</span>=<span class="string">"hasUpdatePermission"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">73</div>
                    <div class="line-content">        &lt;<span class="type">i</span> <span class="variable">class</span>=<span class="string">"fas fa-edit mr-1"</span>&gt;&lt;/<span class="type">i</span>&gt;ユニットの変更</div>
                </div>
                <div class="line">
                    <div class="line-number">74</div>
                    <div class="line-content">      &lt;/<span class="type">button</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">75</div>
                    <div class="line-content">      &lt;<span class="type">button</span> <span class="variable">type</span>=<span class="string">"button"</span> <span class="variable">class</span>=<span class="string">"btn btn-outline-secondary ml-1"</span> (<span class="variable">click</span>)=<span class="string">"deleteModelConfig()"</span></div>
                </div>
                <div class="line">
                    <div class="line-number">76</div>
                    <div class="line-content">        [<span class="variable">disabled</span>]=<span class="string">"!selectedRow"</span> *<span class="variable">ngIf</span>=<span class="string">"hasDeletePermission"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">77</div>
                    <div class="line-content">        &lt;<span class="type">i</span> <span class="variable">class</span>=<span class="string">"fas fa-trash-alt mr-1"</span>&gt;&lt;/<span class="type">i</span>&gt;選択行を削除</div>
                </div>
                <div class="line">
                    <div class="line-number">78</div>
                    <div class="line-content">      &lt;/<span class="type">button</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">79</div>
                    <div class="line-content">    &lt;/<span class="type">div</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">80</div>
                    <div class="line-content">    &lt;<span class="type">div</span> [<span class="variable">ngClass</span>]=<span class="string">"rowData.length > 0 ? 'flex-grow-1 d-flex' : 'd-none'"</span>&gt;</div>
                </div>
                <div class="line">
                    <div class="line-number">81</div>
                    <div class="line-content">      &lt;<span class="type">ag-grid-angular</span> <span class="variable">class</span>=<span class="string">"ag-theme-alpine flex-grow-1"</span> [<span class="variable">columnDefs</span>]=<span class="string">"columnDefs"</span> [<span class="variable">rowData</span>]=<span class="string">"rowData"</span></div>
                </div>
                <div class="line">
                    <div class="line-number">82</div>
                    <div class="line-content">        [<span class="variable">localeText</span>]=<span class="string">"localeText"</span> [<span class="variable">overlayLoadingTemplate</span>]=<span class="string">"overlayLoadingTemplate"</span> [<span class="variable">headerHeight</span>]=<span class="string">"40"</span> [<span class="variable">rowHeight</span>]=<span class="string">"40"</span></div>
                </div>
                <div class="line">
                    <div class="line-number">83</div>
                    <div class="line-content">        [<span class="variable">rowSelection</span>]=<span class="string">"'single'"</span> [<span class="variable">suppressCellFocus</span>]=<span class="string">"true"</span> [<span class="variable">pagination</span>]=<span class="string">"true"</span></div>
                </div>
                <div class="line">
                    <div class="line-number">84</div>
                    <div class="line-content">        [<span class="variable">paginationPageSize</span>]=<span class="string">"paginationPageSize"</span> (<span class="variable">gridReady</span>)=<span class="string">"onGridReady($event)"</span></div>
                </div>
                <div class="line">
                    <div class="line-number">85</div>
                    <div class="line-content">        (<span class="variable">selectionChanged</span>)=<span class="string">"onSelectionChanged()"</span> (<span class="variable">rowDoubleClicked</span>)=<span class="string">"displayModelConfig()"</span>&gt;</div>
                </div>
            </div>
            
            <!-- 底部面板 -->
            <div class="panel">
                <div class="panel-tabs">
                    <div class="panel-tab active">Problems</div>
                    <div class="panel-tab">Output</div>
                    <div class="panel-tab">Terminal</div>
                    <div class="panel-tab">Debug Console</div>
                </div>
                <div class="panel-content">
                    <div>✓ No problems found - 0 errors, 0 warnings</div>
                    <div>✓ Browser application bundle generation complete.</div>
                    <div>Build at: 2025-04-03T00:59:46.175Z - Hash: a48022eb511bb1be - Time: 1387ms</div>
                    <div>4 unchanged chunks</div>
                    <div>Initial Chunk Files | Names   | Raw Size</div>
                    <div>main.js             | main    |  3.16 MB | </div>
                    <div>runtime.js          | runtime |  6.87 kB | </div>
                </div>
            </div>
            
            <!-- 题目框架 -->
            <iframe class="quiz-container" src="http://127.0.0.1:918/{{ file }}" frameborder="0"></iframe>
            <button class="quiz-toggle" style="opacity: 0;">Toggle Quiz</button>
            
            <!-- 紧急切换按钮 -->
            <button class="emergency-switch" style="opacity: 0;">ESC</button>
        </div>
    </div>
    
    <!-- 状态栏 -->
    <div class="statusbar">
        <div class="status-item">
            <span class="status-icon">🔄</span>
            <span>main</span>
        </div>
        <div class="status-item">
            <span class="status-icon">✓</span>
            <span>0 errors 0 warnings</span>
        </div>
        <div class="right-status">
            <div class="status-item">UTF-8</div>
            <div class="status-item">LF</div>
            <div class="status-item">JavaScript</div>
            <div class="status-item">Ln 32, Col 12</div>
        </div>
    </div>

    <script>
        // 添加一些简单的交互效果
        document.addEventListener('DOMContentLoaded', function() {
            // 随机闪烁光标效果
            setInterval(function() {
                const cursor = document.createElement('span');
                cursor.style.backgroundColor = '#007acc';
                cursor.style.width = '2px';
                cursor.style.height = '16px';
                cursor.style.display = 'inline-block';
                cursor.style.position = 'absolute';
                
                // 随机选择一行
                const lines = document.querySelectorAll('.line-content');
                const randomLine = lines[Math.floor(Math.random() * lines.length)];
                
                // 添加光标
                randomLine.appendChild(cursor);
                
                // 2秒后移除光标
                setTimeout(function() {
                    cursor.remove();
                }, 2000);
            }, 5000);
            
            // 点击文件时切换活动状态
            const files = document.querySelectorAll('.file');
            files.forEach(file => {
                file.addEventListener('click', function() {
                    files.forEach(f => f.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // 点击标签页时切换活动状态
            const tabs = document.querySelectorAll('.tab');
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // 点击面板标签页时切换活动状态
            const panelTabs = document.querySelectorAll('.panel-tab');
            panelTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    panelTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // 题目切换功能
            const quizToggle = document.querySelector('.quiz-toggle');
            const quizContainer = document.querySelector('.quiz-container');
            const editorContainer = document.querySelector('.editor-container');
            
            quizToggle.addEventListener('click', function() {
                quizContainer.classList.toggle('visible');
                editorContainer.classList.toggle('quiz-mode');
            });
            
            // 紧急切换功能 - 当有人靠近时快速隐藏题目
            const emergencySwitch = document.querySelector('.emergency-switch');
            emergencySwitch.addEventListener('click', function() {
                quizContainer.classList.remove('visible');
                editorContainer.classList.remove('quiz-mode');
            });
            
            // 键盘快捷键 - 按ESC键快速隐藏题目
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    quizContainer.classList.toggle('visible');
                    editorContainer.classList.toggle('quiz-mode');
                }
                // 按F1键显示/隐藏题目
                if (e.key === 'w') {
                    quizContainer.classList.toggle('visible');
                    editorContainer.classList.toggle('quiz-mode');
                    e.preventDefault(); // 阻止浏览器默认行为
                }
            });
        });
    </script>
</body>
</html> 