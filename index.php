<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galgame Wiki —— Galgame 与视觉小说的学术资料库</title>
    <meta name="description" content="Galgame Wiki 是一个由爱好者发起、长期维护的非营利性学术资料库，专注于 Galgame 与视觉小说领域的知识整理、理论归档与文化研究。" />
    <style>
        /* === 全局重置 & 基础 === */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: #faf9f7;
            color: #1d1d1f;
            line-height: 1.7;
            padding: 2rem 1rem;
        }

        .container {
            max-width: 880px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 20px;
            padding: 3rem 2.5rem;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.04);
        }

        /* === 排版 === */
        h1 {
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 0.25rem;
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .subtitle {
            font-size: 1.05rem;
            color: #6b7280;
            margin-bottom: 2rem;
            border-bottom: 2px solid #f0ede8;
            padding-bottom: 1.25rem;
        }

        .subtitle a {
            color: #3b82f6;
            text-decoration: none;
            -webkit-text-fill-color: #3b82f6;
        }

        .subtitle a:hover {
            text-decoration: underline;
        }

        h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 2.4rem;
            margin-bottom: 0.75rem;
            padding-bottom: 0.4rem;
            border-bottom: 3px solid #eae7e2;
            letter-spacing: -0.01em;
        }

        h3 {
            font-size: 1.15rem;
            font-weight: 600;
            margin-top: 1.6rem;
            margin-bottom: 0.4rem;
        }

        p {
            margin-bottom: 1rem;
            color: #2c2c2e;
        }

        a {
            color: #2563eb;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        ul,
        ol {
            margin: 0.5rem 0 1.2rem 1.5rem;
        }

        li {
            margin-bottom: 0.3rem;
        }

        /* === 标签 / 徽章 === */
        .badge-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
            margin: 0.75rem 0 1.2rem 0;
            list-style: none;
            padding: 0;
        }

        .badge-list li {
            background: #f0ede8;
            padding: 0.2rem 0.9rem;
            border-radius: 20px;
            font-size: 0.85rem;
            color: #2c2c2e;
            margin: 0;
        }

        /* === 统计卡片 === */
        .stats {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem 3rem;
            background: #f8f7f5;
            border-radius: 14px;
            padding: 1.2rem 1.8rem;
            margin: 1.2rem 0 1.8rem 0;
            border: 1px solid #ece9e4;
        }

        .stats-item {
            display: flex;
            align-items: baseline;
            gap: 0.3rem;
        }

        .stats-number {
            font-size: 1.4rem;
            font-weight: 700;
            color: #1a1a2e;
        }

        .stats-label {
            font-size: 0.95rem;
            color: #6b7280;
        }

        /* === 板块网格 === */
        .section-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.8rem 1.8rem;
            margin: 0.8rem 0 1.2rem 0;
            padding: 0;
            list-style: none;
        }

        .section-grid li {
            margin: 0;
            padding: 0.2rem 0;
            font-size: 0.98rem;
            color: #2c2c2e;
        }

        .section-grid li::before {
            content: "▸ ";
            color: #3b82f6;
            font-weight: 600;
        }

        /* === 表格 === */
        .table-wrap {
            overflow-x: auto;
            margin: 1rem 0 1.6rem 0;
            border-radius: 12px;
            border: 1px solid #ece9e4;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        th,
        td {
            padding: 0.7rem 1rem;
            text-align: left;
            border-bottom: 1px solid #f0ede8;
        }

        th {
            background: #f8f7f5;
            font-weight: 600;
            color: #1d1d1f;
        }

        tr:last-child td {
            border-bottom: none;
        }

        /* === 引用块 === */
        blockquote {
            border-left: 4px solid #3b82f6;
            padding: 0.8rem 1.4rem;
            margin: 1.2rem 0;
            background: #f8f7f5;
            border-radius: 0 10px 10px 0;
            color: #2c2c2e;
            font-style: italic;
        }

        /* === 快速链接 === */
        .quick-links {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem 2rem;
            background: #f8f7f5;
            border-radius: 14px;
            padding: 1.2rem 1.8rem;
            margin: 1.2rem 0 0 0;
            border: 1px solid #ece9e4;
        }

        .quick-links a {
            font-weight: 500;
        }

        /* === 页脚 === */
        .footer {
            margin-top: 2.8rem;
            padding-top: 1.4rem;
            border-top: 2px solid #f0ede8;
            font-size: 0.9rem;
            color: #8e8e93;
            text-align: center;
        }

        .footer a {
            color: #6b7280;
        }

        /* === 响应式 === */
        @media (max-width: 640px) {
            .container {
                padding: 1.8rem 1.2rem;
            }

            h1 {
                font-size: 1.6rem;
            }

            .section-grid {
                grid-template-columns: 1fr;
                gap: 0.2rem;
            }

            .stats {
                flex-direction: column;
                gap: 0.2rem;
            }

            .quick-links {
                flex-direction: column;
                gap: 0.4rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">

        <!-- 标题 -->
        <h1>📚 Galgame Wiki</h1>
        <div class="subtitle">
            Galgame 与视觉小说的学术资料库<br />
            <a href="https://www.galgame.it/wiki">主站</a> ｜
            <a href="https://journal.galgame.it">《Galgame研究》期刊</a>
        </div>

        <!-- 项目简介 -->
        <h2>✨ 项目简介</h2>
        <p>
            <strong>Galgame Wiki</strong> 是一个由忧郁的DT君发起、长期维护的<strong>非营利性学术资料库</strong>，专注于 <strong>Galgame（美少女游戏）</strong>与 <strong>视觉小说（Visual Novel）</strong>领域的知识整理、理论归档与文化研究。
        </p>
        <p>
            我们相信，Galgame 不仅是一种娱乐产品，更是一种值得被严肃对待的叙事媒介和文化现象。因此，我们致力于构建一个 <strong>系统化、结构化、开放共享</strong> 的知识体系，涵盖从基础概念到深度理论、从游戏作品到现实取景地的全方位信息。
        </p>

        <!-- 统计 -->
        <div class="stats">
            <span class="stats-item">
                <span class="stats-number">4</span>
                <span class="stats-label">年</span>
            </span>
            <span class="stats-item">
                <span class="stats-number">102+</span>
                <span class="stats-label">条目</span>
            </span>
            <span class="stats-item">
                <span class="stats-number">8万+</span>
                <span class="stats-label">注册用户</span>
            </span>
            <span class="stats-item">
                <span class="stats-number">¥6,754</span>
                <span class="stats-label">2025年度支出</span>
            </span>
        </div>

        <!-- 六大核心板块 -->
        <h2>📂 六大核心内容板块</h2>

        <h3>1️⃣ 核心概念</h3>
        <p>收录 Galgame 领域的基础术语和理论框架，例如：“视觉小说”与“ADV”的区别、“电波系”“郁系”“燃系”等风格分类、“Meta 叙事”“剧情锁”“批评空间”评分体系等。每一个词条都附带参考文献、相关作品举例和交叉链接。</p>

        <h3>2️⃣ 工具</h3>
        <p>整理 Galgame 相关的实用软件、插件和在线资源：游戏引擎（Kirikiri、Ren'Py、NScripter 等）、汉化工具、模拟器与兼容层、存档管理、外部资源导航（VNDB、批评空间等）。</p>

        <h3>3️⃣ 游戏资料库</h3>
        <p><strong>按会社（品牌）分类</strong>，系统整理每部作品的基础档案：作品名称、开发商、原画/剧本/音乐、发售日期、平台、分级、剧情梗概、角色介绍、获奖记录与评分数据。</p>
        <p>目前已收录 <strong>Alicesoft</strong>（兰斯系列）、<strong>Key</strong>（Kanon、CLANNAD、星之梦）、<strong>Nitro+</strong>（沙耶之歌）、<strong>âge</strong>（Muv-Luv 系列）、<strong>Type-Moon</strong>（月姬、Fate/stay night）、<strong>minori</strong>、<strong>5pb.</strong>（命运石之门）等数十个会社的数百部作品。</p>

        <h3>4️⃣ 亚文化现象</h3>
        <p>探讨 Galgame 衍生的文化圈层与社会现象：“二次元”与“宅文化”的关联、“圣地巡礼”、同人创作生态、声优偶像化、Galgame 改编动画的成败案例、中文汉化社区的发展史。</p>

        <h3>5️⃣ 争议话题</h3>
        <p>以学术中立的态度，记录 Galgame 发展过程中引发广泛讨论的议题：R18 内容的审查与分级制度、政治正确对角色设计的影响、AI 生成内容对创作方式的挑战、“电子小说”是否属于文学范畴的辩论等。每个话题均提供正反方观点、历史背景和行业数据。</p>

        <h3>6️⃣ 作品原型地与取景地</h3>
        <p>专门整理 Galgame 中出现的现实场景：《秋之回忆》系列的镰仓与江之岛、《缘之空》的奥日光、《樱之诗》的京都、《白色相簿2》的东京与札幌等。配有地图坐标、交通方式和实景对比，方便玩家规划圣地巡礼。</p>

        <!-- 旗下期刊 -->
        <h2>📄 旗下学术期刊 —— 《Galgame研究》</h2>
        <p>
            《Galgame研究》是 Galgame Wiki 旗下的<strong>在线学术期刊</strong>，旨在为 Galgame 与视觉小说研究提供一个 <strong>严肃、同行评议、开放获取</strong> 的发表平台。不接受普通评测或感想文，只刊发具有方法论、数据支持或理论深度的原创研究。
        </p>

        <h3>已发表研究成果（部分）</h3>
        <ul>
            <li><strong>《素晴日玩家群体画像、评价分化与文化接受度研究》</strong> —— 综合多平台评分数据，通过聚类分析揭示“极化共识”现象。</li>
            <li><strong>《基于机器学习的视觉小说评价预测与情感分析》</strong> —— 首次将 SVM、随机森林、XGBoost 和 BERT 模型应用于视觉小说评分预测。</li>
            <li><strong>《论〈Muv-Luv Alternative〉的狂气与救赎》</strong> —— 剖析该作在批评空间历史第一的排名背后的叙事策略。</li>
            <li><strong>《雨、星空与永不熄灭的梦——论〈星之梦〉的末世诗学与文明寓言》</strong> —— 以“雨”与“星空”为双核心意象，解构 Key 社短篇的文学性。</li>
        </ul>

        <p>
            <strong>📌 征稿启事：</strong> 长期面向学术界、独立研究者及深度玩家征稿，主题包括 Galgame 叙事学、美学、哲学分析，玩家行为与心理研究，产业经济与市场分析，跨媒介改编与传播，数字人文方法等。
        </p>

        <!-- 适合人群 -->
        <h2>👥 适合什么样的人群？</h2>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr><th>人群</th><th>能获得什么</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Galgame 研究者</strong></td><td>系统化的参考资料、学术期刊发表机会、跨学科交流平台</td></tr>
                    <tr><td><strong>深度核心玩家</strong></td><td>深入了解作品背景、理论解读、文化现象分析</td></tr>
                    <tr><td><strong>内容创作者（UP主/写手）</strong></td><td>可靠的数据源、剧情细节查证、灵感启发</td></tr>
                    <tr><td><strong>刚入坑的新人</strong></td><td>从核心概念开始，有条理地了解 Galgame 全貌</td></tr>
                    <tr><td><strong>圣地巡礼爱好者</strong></td><td>取景地汇总、交通攻略、实景对比</td></tr>
                    <tr><td><strong>汉化组/同人创作者</strong></td><td>工具资源、术语统一参考、社区协作</td></tr>
                </tbody>
            </table>
        </div>

        <!-- 开源共享 -->
        <h2>💰 开源共享 · 财务透明</h2>
        <p>
            Galgame Wiki 坚持 <strong>完全免费、无广告</strong> 的原则，所有内容向公众开放。每年公开运营支出（服务器、域名、维护人力等），<strong>2025 年度总支出为 ¥6,754</strong>。
        </p>
        <p>
            如果你认同我们的工作，欢迎通过 <strong>爱发电</strong> 或 <strong>GitHub Sponsors</strong> 给予支持，每一笔赞助都将用于站点扩容和内容建设，并公示使用明细。
        </p>

        <!-- 常见问题 -->
        <h2>❓ 常见问题</h2>
        <p><strong>Q：Galgame Wiki 和 VNDB、批评空间有什么区别？</strong><br />
        A：VNDB 侧重英文资料和数据库，批评空间侧重评分排行，而 Galgame Wiki 侧重 <strong>中文语境下的学术整理</strong> 与 <strong>深度内容</strong>，更接近一部“百科全书”而非单纯的数据库。</p>

        <p><strong>Q：内容是否允许转载？</strong><br />
        A：所有文字内容采用 <strong>CC BY-NC-SA 4.0</strong> 许可，允许非商业性转载，但须署名并相同方式共享。</p>

        <p><strong>Q：如何参与编辑？</strong><br />
        A：目前采用提交 Issue 或 PR 的方式（通过 GitHub），未来将开放在线编辑。详情参见网站“贡献指南”。</p>

        <p><strong>Q：期刊是否收费？</strong><br />
        A：完全开放获取，阅读和投稿均不收费。</p>

        <!-- 如何参与 -->
        <h2>🤝 如何参与贡献？</h2>
        <ol>
            <li><strong>完善条目</strong> —— 补充缺失的游戏资料、修正错误信息</li>
            <li><strong>撰写新文章</strong> —— 针对空白作品或概念撰写深度介绍</li>
            <li><strong>提供数据</strong> —— 分享你收藏的评分、销量、发售信息</li>
            <li><strong>翻译资源</strong> —— 将日文/英文资料译为中文</li>
            <li><strong>反馈建议</strong> —— 告诉我们你想看的内容或发现的 Bug</li>
            <li><strong>捐赠支持</strong> —— 帮助我们覆盖运营成本</li>
        </ol>
        <p>访问网站即可找到各渠道的联系方式。</p>

        <!-- 快速链接 -->
        <h2>🔗 快速链接</h2>
        <div class="quick-links">
            <a href="https://www.galgame.it/wiki">Galgame Wiki 主站</a>
            <a href="https://journal.galgame.it">《Galgame研究》期刊</a>
            <a href="https://github.com/sombermengling/galgamewiki">GitHub 仓库</a>
        </div>

        <!-- 最后的话 -->
        <blockquote>
            Galgame 不仅是一种娱乐媒介，它承载着情感、思想与时代的印记。我们希望通过 Galgame Wiki 和《Galgame研究》期刊，将这份热爱转化为可以被检索、被引用、被传承的知识。<br /><br />
            <strong>无论你是偶然点进来的路人，还是资深的十年老粉，这里都有一席之地。</strong><br /><br />
            欢迎收藏、转发、参与 —— 让每一部优秀的 Galgame，不仅被玩过，更被研究过、被记住。
        </blockquote>

        <!-- 页脚 -->
        <div class="footer">
            最后更新：2026 年 7 月 &nbsp;·&nbsp; 基于 <a href="https://github.com/sombermengling/galgamewiki">GitHub</a> 开源共建
        </div>

    </div>
</body>
</html>
