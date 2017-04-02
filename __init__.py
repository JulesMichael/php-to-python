import json
import sys

argv = sys.argv[1:]
datas = json.loads(argv[0])
debug = True if argv[1] == "true" else False


print(json.dumps(datas)) # Use this to return datas to php