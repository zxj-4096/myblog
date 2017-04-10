此目录为KM目录

1.模块设计思想
	采用xml组织目录文件 或json
		xml结点设置
			<xml>
				...
				<km_node>
					<km_id>
					<km_name>
					<km_time>
					<km_type>类型 图片 字符 或文件
					<km_res_path>path
					<km_res_link>类似资源
					
					<km_md5>
				</km_node>
				...
			</xml>
	文件采用文件实体或数据库,采用ID标识资源。
2.模块设计
	结点应该支持父结点查找子结点，及子结点查找类似结点。
	类似一个三维结构
	例:
	X是语言，Y是支持的特性,Z是其他语言的实现。